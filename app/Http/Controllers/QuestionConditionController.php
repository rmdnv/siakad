<?php
namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionCondition;
use Illuminate\Http\Request;

class QuestionConditionController extends Controller
{
    public function create(Question $question)
    {
        $parentQuestions = Question::all();
        return view('conditions.create', compact('question', 'parentQuestions'));
    }

    public function store(Request $request, Question $question)
    {
        $data = $request->validate([
            'parent_question_id'  => 'required|integer',
            'parent_answer_value' => 'required|string',
            'operator'            => 'required|string',
        ]);

        $data['question_id'] = $question->id;
        QuestionCondition::create($data);

        return redirect()->route('questions.edit', $question)->with('success', 'Condition added.');
    }

    public function destroy(Question $question, QuestionCondition $condition)
    {
        $condition->delete();
        return redirect()->route('questions.edit', $question)->with('success', 'Condition deleted.');
    }
}
