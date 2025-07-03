<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $sequence_order
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $certification_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Question> $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereCertificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereSequenceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LearningModule extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'is_active' => 'boolean',
        'sequence_order' => 'integer'
    ];

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
