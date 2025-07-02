<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $question_id
 * @property string $alternative_text
 * @property int $is_correct
 * @property string $correct_explanation
 * @property string $incorrect_explanation
 * @property int|null $sequence_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative whereAlternativeText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative whereCorrectExplanation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative whereIncorrectExplanation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative whereSequenceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionAlternative whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class QuestionAlternative extends Model
{
    protected $guarded = ['id'];
}
