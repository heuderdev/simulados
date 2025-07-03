<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $total_questions
 * @property int $passing_score
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $certification_id
 * @property int $duration_minutes
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereCertificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereDurationMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate wherePassingScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereTotalQuestions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ExamTemplate extends Model
{
    protected $guarded = ['id'];
}
