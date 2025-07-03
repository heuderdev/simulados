<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $exam_category_id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string|null $acronym
 * @property string|null $institution
 * @property string|null $requirements
 * @property int $sequence_order
 * @property int $is_active
 * @property int $requires_premium
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereAcronym($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereExamCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereRequiresPremium($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereSequenceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Certification extends Model
{
    protected $guarded = ['id'];
}
