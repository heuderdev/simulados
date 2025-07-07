<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exam_questions', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('user_exam_id')->constrained()->cascadeOnDelete();
            $table->foreignId('question_id')->constrained();
            $table->integer('sequence_order');
            $table->foreignId('answered_alternative_id')->nullable()->constrained('question_alternatives');
            $table->boolean('is_correct')->nullable();
            $table->unsignedInteger('time_spent_seconds')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_questions');
    }
};
