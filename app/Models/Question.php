<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function learningModule()
    {
        return $this->belongsTo(LearningModule::class);
    }

    public function alternatives()
    {
        return $this->hasMany(QuestionAlternative::class);
    }

    public function videoLesson()
    {
        return $this->hasOne(VideoLesson::class);
    }
}
