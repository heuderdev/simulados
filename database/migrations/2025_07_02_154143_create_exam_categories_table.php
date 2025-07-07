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
        Schema::create('exam_categories', function (Blueprint $table): void {
            $table->id();
            $table->string('name'); // 'Financeiro', 'TI', 'Gestão'
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('icon')->nullable(); // FontAwesome ou similar
            $table->string('color', 7)->default('#007bff'); // Cor hex para UI
            $table->integer('sequence_order');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            // INÍCIO DA MELHORIA: Índices para performance
            $table->index(['is_active', 'sequence_order']);
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_categories');
    }
};
