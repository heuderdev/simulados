<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $question_id
 * @property string $title
 * @property string|null $description
 * @property string $video_path
 * @property int|null $duration_seconds
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson whereDurationSeconds($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VideoLesson whereVideoPath($value)
 * @mixin \Eloquent
 */
class VideoLesson extends Model
{
    protected $guarded = ['id'];
}
