<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionCondition;
use App\Models\QuestionOption; // <-- tambahin ini
use App\Models\Stage;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('conditions.parentQuestion', 'options')->latest()->get();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        $stages       = Stage::all();
        $allQuestions = Question::all();

        return view('questions.create', compact('stages', 'allQuestions'));
    }

    public function bulkEdit(Request $request)
    {
        $ids = explode(',', $request->get('ids'));

        $questions = Question::with('conditions')->whereIn('id', $ids)->get();

        // semua pertanyaan untuk dropdown parent
        $allQuestions = Question::all();

        return view('questions.bulk_edit', compact('questions', 'allQuestions'));
    }

    public function bulkUpdate(Request $request)
    {
        foreach ($request->conditions as $questionId => $conditions) {
            $question = Question::find($questionId);

            if ($question) {
                // hapus semua kondisi lama
                $question->conditions()->delete();

                // simpan kondisi baru
                foreach ($conditions as $condition) {
                    if (!empty($condition['answer']) && !empty($condition['next_question_id'])) {
                        $question->conditions()->create([
                            'answer' => $condition['answer'],
                            'next_question_id' => $condition['next_question_id'],
                        ]);
                    }
                }
            }
        }

        return redirect()->route('questions.index')->with('success', 'Kondisi pertanyaan berhasil diupdate!');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'stage_id' => 'required|exists:stages,id',
            'text'     => 'required|string',
            'type'     => 'required|in:radio,checkbox,text',
        ]);

        // buat pertanyaan
        $question = Question::create([
            'stage_id' => $validated['stage_id'],
            'text'     => $validated['text'],
            'type'     => $validated['type'],
        ]);

        // simpan kondisi (kalau ada)
        if ($request->has('conditions.parent_question_id')) {
            $parentIds = $request->input('conditions.parent_question_id', []);
            $operators = $request->input('conditions.operator', []);
            $values    = $request->input('conditions.parent_answer_value', []);

            foreach ($parentIds as $index => $parentId) {
                if (! empty($parentId) && isset($operators[$index]) && isset($values[$index])) {
                    $op = $operators[$index] ?? null;

                    if ($op === '||') $op = 'ATAU';

                    $question->conditions()->create([
                        'parent_question_id'  => $parentId,
                        'operator'            => $op,
                        'parent_answer_value' => $values[$index],
                    ]);
                }
            }
        }

        // simpan opsi (kalau ada)
        if ($request->has('question_options.value')) {
            $values = $request->input('question_options.value', []);
            $texts  = $request->input('question_options.text', []);

            foreach ($values as $i => $value) {
                if (! empty($value) || ! empty($texts[$i] ?? null)) {
                    QuestionOption::create([
                        'question_id' => $question->id,
                        'value'       => $value,
                        'text'        => $texts[$i] ?? '',
                    ]);
                }
            }
        }

        return redirect()->route('questions.index')
            ->with('success', 'Pertanyaan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $question     = Question::findOrFail($id);
        $stages       = Stage::all();
        $allQuestions = Question::all();

        return view('questions.edit', compact('question', 'stages', 'allQuestions'));
    }

    public function bulkDelete(Request $request)
    {
        $ids = explode(',', $request->input('question_ids', ''));
        Question::whereIn('id', $ids)->delete();

        return redirect()->route('questions.index')
            ->with('success', 'Pertanyaan terpilih berhasil dihapus!');
    }

    public function bulkDuplicate(Request $request)
    {
        $ids = explode(',', $request->input('question_ids', ''));
        $questions = Question::whereIn('id', $ids)->get();

        foreach ($questions->reverse() as $question) {
            // duplikat question
            $newQuestion = $question->replicate();
            $newQuestion->text .= '';
            $newQuestion->push();

            // duplikat conditions
            foreach ($question->conditions as $condition) {
                $newCondition = $condition->replicate();
                $newCondition->question_id = $newQuestion->id;
                $newCondition->save();
            }

            // duplikat options
            foreach ($question->options as $option) {
                $newOption = $option->replicate();
                $newOption->question_id = $newQuestion->id;
                $newOption->save();
            }
        }

        return redirect()->route('questions.index')
            ->with('success', 'Pertanyaan terpilih berhasil diduplikat!');
    }

    public function duplicate(Question $question)
    {
        // duplikat data utama
        $newQuestion = $question->replicate(); // copy semua kolom kecuali id
        $newQuestion->text = $newQuestion->text . ' (Copy)'; // biar keliatan hasil duplikat
        $newQuestion->push(); // simpan

        // duplikat conditions
        foreach ($question->conditions as $condition) {
            $newCondition = $condition->replicate();
            $newCondition->question_id = $newQuestion->id;
            $newCondition->save();
        }

        // duplikat options
        foreach ($question->options as $option) {
            $newOption = $option->replicate();
            $newOption->question_id = $newQuestion->id;
            $newOption->save();
        }

        return redirect()->route('questions.index')
            ->with('success', 'Pertanyaan berhasil diduplikat!');
    }


    public function update(Request $request, Question $question)
    {
        $data = $request->validate([
            'stage_id'    => 'required|integer|exists:stages,id',
            'text'        => 'required|string',
            'type'        => 'required|string|in:radio,checkbox,text',
            'allow_other' => 'nullable|boolean',
        ]);

        $question->update($data);

        /** ======================
         *  HANDLE CONDITIONS
         *  ====================== */
        $question->conditions()->delete(); // hapus semua lama

        if ($request->has('conditions.parent_question_id')) {
            $parentIds = $request->input('conditions.parent_question_id', []);
            $operators = $request->input('conditions.operator', []);
            $values    = $request->input('conditions.parent_answer_value', []);

            foreach ($parentIds as $index => $parentId) {
                if (! empty($parentId) && isset($operators[$index]) && isset($values[$index])) {
                    $op = $operators[$index] ?? null;

                    if ($op === '||') $op = 'ATAU';

                    $question->conditions()->create([
                        'parent_question_id'  => $parentId,
                        'operator'            => $op,
                        'parent_answer_value' => $values[$index],
                    ]);
                }
            }
        }

        /** ======================
         *  HANDLE OPTIONS
         *  ====================== */
        $question->options()->delete(); // hapus semua lama

        if ($request->has('question_options.value')) {
            $values = $request->input('question_options.value', []);
            $texts  = $request->input('question_options.text', []);

            foreach ($values as $i => $value) {
                if (! empty($value) || ! empty($texts[$i] ?? null)) {
                    $question->options()->create([
                        'value' => $value,
                        'text'  => $texts[$i] ?? '',
                    ]);
                }
            }
        }

        return redirect()->route('questions.index')
            ->with('success', 'Question updated (beserta kondisi & opsi).');
    }


    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index')->with('success', 'Question deleted.');
    }
}
