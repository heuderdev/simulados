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
        Schema::create('certifications', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('exam_category_id')->constrained()->onDelete('cascade');
            $table->string('name'); // 'CPA-20', 'ITIL Foundation', 'CPA-10'
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('acronym', 20)->nullable(); // 'CPA20', 'ITIL'
            $table->string('institution')->nullable(); // 'ANBIMA', 'AXELOS'
            $table->text('requirements')->nullable(); // Pré-requisitos
            $table->integer('sequence_order');
            $table->boolean('is_active')->default(true);
            $table->boolean('requires_premium')->default(false);
            $table->timestamps();

            // INÍCIO DA MELHORIA: Índices e constraints
            $table->index(['exam_category_id', 'is_active']);
            $table->index('slug');
            $table->index('acronym');
            $table->unique(['exam_category_id', 'sequence_order'], 'unique_order_per_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};
