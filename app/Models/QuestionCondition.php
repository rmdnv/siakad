<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionCondition extends Model
{
    protected $fillable = [
        'question_id',
        'parent_question_id',
        'parent_answer_value',
        'operator',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function parentQuestion()
    {
        return $this->belongsTo(Question::class, 'parent_question_id');
    }
}
