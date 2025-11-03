<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['type', 'text', 'stage_id', 'parent_question_id', 'parent_answer_value', 'allow_other'];

    public function options()
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function conditions()
    {
        return $this->hasMany(QuestionCondition::class, 'question_id');
    }

    public function answers()
{
    return $this->hasMany(Answer::class);
}
}
