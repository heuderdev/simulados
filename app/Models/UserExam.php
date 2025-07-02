<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $exam_template_id
 * @property string $started_at
 * @property string|null $completed_at
 * @property string|null $score
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ExamQuestion> $examQuestions
 * @property-read int|null $exam_questions_count
 * @property-read \App\Models\ExamQuestion|null $pivot
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Question> $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam whereExamTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserExam whereUserId($value)
 * @mixin \Eloquent
 */
class UserExam extends Model
{
    protected $table = 'user_exams';

    protected $guarded = ['id'];

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
