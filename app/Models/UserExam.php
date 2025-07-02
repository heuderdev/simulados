<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserExam extends Model
{
    public function examQuestions()
    {
        return $this->hasMany(ExamQuestion::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'exam_questions')
            ->using(ExamQuestion::class)
            ->withPivot(['answered_alternative_id', 'is_correct', 'time_spent_seconds']);
    }
}
