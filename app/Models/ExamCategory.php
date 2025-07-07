<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string|null $icon
 * @property string $color
 * @property int $sequence_order
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Certification> $activeCertifications
 * @property-read int|null $active_certifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Certification> $certifications
 * @property-read int|null $certifications_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory active()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory ordered()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory whereSequenceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ExamCategory extends Model
{
    protected $table = 'exam_categories';
    protected $guarded = ['id'];

    protected $casts = [
        'is_active' => 'boolean',
        'sequence_order' => 'integer'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model): void {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name);
            }
        });
    }

    public function certifications(): HasMany
    {
        return $this->hasMany(Certification::class)->orderBy('sequence_order');
    }

    public function activeCertifications(): HasMany
    {
        return $this->hasMany(Certification::class)
                    ->where('is_active', true)
                    ->orderBy('sequence_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sequence_order');
    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $value): string => \Carbon\Carbon::parse($value)->format('d/m/Y H:i:s')
        );
    }
}
