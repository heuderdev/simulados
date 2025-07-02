<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
	class ExamQuestion extends \Eloquent {}
}

namespace App\Models{
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate wherePassingScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereTotalQuestions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamTemplate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ExamTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $sequence_order
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Question> $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereSequenceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningModule whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class LearningModule extends \Eloquent {}
}

namespace App\Models{
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
	class Question extends \Eloquent {}
}

namespace App\Models{
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
	class QuestionAlternative extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $plan_id
 * @property string $price
 * @property string $starts_at
 * @property string $ends_at
 * @property string $status
 * @property string $payment_method
 * @property string|null $payment_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subscription whereUserId($value)
 * @mixin \Eloquent
 */
	class Subscription extends \Eloquent {}
}

namespace App\Models{
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
	class VideoLesson extends \Eloquent {}
}

