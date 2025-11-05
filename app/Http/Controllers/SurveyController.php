<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\PerguruanTinggi;
use App\Models\Question;
use App\Models\Stage;
use App\Models\TracerStudy;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    private function getUserAnswers($user_id)
    {
        return Answer::where('user_id', $user_id)
            ->pluck('answer', 'question_id')
            ->toArray();
    }

    private function filterQuestions($stage_id, $allAnswers)
    {
        return Question::whereIn('stage_id', [$stage_id, $stage_id + 1, $stage_id + 2])
            ->orderBy('id')
            ->get()
            ->filter(function ($q) use ($allAnswers) {
                if ($q->conditions->isEmpty()) {
                    return true;
                }

                $andResults = [];
                $orResults  = [];

                foreach ($q->conditions as $cond) {
                    $parentId      = $cond->parent_question_id;
                    $expectedValue = $cond->parent_answer_value;
                    $op            = strtoupper(trim($cond->operator));

                    if (! isset($allAnswers[$parentId])) {
                        if (in_array($op, ['OR', 'ATAU', '||'])) {
                            $orResults[] = false;
                            continue;
                        }
                        return false;
                    }

                    switch ($op) {
                        case '=':
                        case 'AND':
                            $andResults[] = ($allAnswers[$parentId] == $expectedValue);
                            break;

                        case '!=':
                        case 'NOT':
                            $andResults[] = ($allAnswers[$parentId] != $expectedValue);
                            break;

                        case 'OR':
                        case 'ATAU':
                        case '||':
                            $orResults[] = ($allAnswers[$parentId] == $expectedValue);
                            break;
                    }
                }

                $andPass = empty($andResults) || ! in_array(false, $andResults);

                $orPass = empty($orResults) || in_array(true, $orResults);

                return $andPass && $orPass;
            })
            ->values();
    }

    private function updateUserStatus($user_id, $questions)
    {
        $answered = Answer::where('user_id', $user_id)
            ->whereIn('question_id', $questions->pluck('id'))
            ->count();

        $tracer         = TracerStudy::find($user_id);
        $tracer->status = $answered == 0
            ? 'Belum Mengisi'
            : ($answered < $questions->count() ? 'Sedang Mengisi' : 'Selesai Mengisi');
        $tracer->updated_at = now();
        $tracer->save();

        return $tracer->status;
    }

    public function show($stage_id, $page = 1)
    {
        $stage   = Stage::findOrFail($stage_id);
        $user_id = session('tracer_study_id');

        $questions = Question::all();
        $allAnswers = $this->getUserAnswers($user_id);
        $questions  = $this->filterQuestions($stage_id, $allAnswers);

        $status = $this->updateUserStatus($user_id, $questions);
        if ($status === "Selesai Mengisi") {
            return redirect('/tracer-study/survey/complete');
        }

        $question = $questions->skip($page - 1)->first();
        if (! $question) {
            $nextStage = Stage::where('id', '>', $stage_id)->orderBy('id')->first();
            return $nextStage
                ? redirect()->route('survey.stage.page', ['stage_id' => $nextStage->id, 'page' => 1])
                : redirect('/tracer-study/survey/complete');
        }

        $previousAnswer = Answer::where('user_id', $user_id)
            ->where('question_id', $question->id)
            ->first();

        return view('survey.stage.page', data: compact('stage', 'question', 'page', 'previousAnswer'));
    }

    public function deleteAnswer(Request $request, $questionId, $stage_id, $page)
    {
        $user_id = session('tracer_study_id');
        $user = TracerStudy::find($user_id);

        $question = Question::find($questionId);

        if ($question) {
            $user->answers()->where('question_id', $question->id)->delete();
        }

        $allAnswers = $this->getUserAnswers($user_id);
        $questions  = $this->filterQuestions($stage_id, $allAnswers);

        $status = $this->updateUserStatus($user_id, $questions);
        if ($status === "Selesai Mengisi") {
            return redirect('/tracer-study/survey/complete');
        }

        return redirect()->route('survey.stage.page', ['stage_id' => $stage_id, 'page' => $page - 1]);
    }

    public function submit(Request $request, $stage_id, $page)
    {
        $request->validate([
            'answer'       => 'required',
            'other_answer' => 'nullable|string',
        ]);

        $user_id = session('tracer_study_id');
        $question = Question::find($request->question_id);

        if ($question && $question->type === 'perguruan_tinggi') {
            $exists = PerguruanTinggi::where('nama', $request->answer)->exists();
            if (! $exists) {
                return back()->with('error', 'Perguruan tinggi tidak valid.');
            }
        }

        Answer::updateOrCreate(
            ['user_id' => $user_id, 'question_id' => $request->question_id],
            [
                'answer'       => is_array($request->answer) ? implode(',', $request->answer) : $request->answer,
                'other_answer' => $request->other_answer,
            ]
        );

        $allAnswers = $this->getUserAnswers($user_id);
        $questions  = $this->filterQuestions($stage_id, $allAnswers);

        $status = $this->updateUserStatus($user_id, $questions);
        if ($status === "Selesai Mengisi") {
            return redirect('/tracer-study/survey/complete');
        }

        return redirect()->route('survey.stage.page', ['stage_id' => $stage_id, 'page' => $page + 1]);
    }
}
