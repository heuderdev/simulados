<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * 
 *
 * @property int $id
 * @property int $user_exam_id
 * @property int $question_id
 * @property int $sequence_order
 * @property int|null $answered_alternative_id
 * @property int|null $is_correct
 * @property int $time_spent_seconds
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion whereAnsweredAlternativeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion whereSequenceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion whereTimeSpentSeconds($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamQuestion whereUserExamId($value)
 * @mixin \Eloquent
 */
class ExamQuestion extends Pivot
{
    protected $table = 'exam_questions';

    protected $guarded = ['id'];
}
