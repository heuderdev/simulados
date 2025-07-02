<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $learning_module_id
 * @property string $question_text
 * @property string $explanation
 * @property int $difficulty_level
 * @property int|null $sequence_order
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\QuestionAlternative> $alternatives
 * @property-read int|null $alternatives_count
 * @property-read \App\Models\LearningModule $learningModule
 * @property-read \App\Models\VideoLesson|null $videoLesson
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereDifficultyLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereExplanation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereLearningModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereQuestionText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereSequenceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Question whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Question extends Model
{
    protected $guarded = ['id'];

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
