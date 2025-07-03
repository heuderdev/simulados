<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('exam_templates', function (Blueprint $table) {
            $table->foreignId('certification_id')->after('id')->constrained()->onDelete('cascade');
            $table->integer('duration_minutes')->default(120); // Tempo de prova
            $table->index(['certification_id', 'is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_templates', function (Blueprint $table) {
            $table->dropForeign(['certification_id']);
            $table->dropColumn(['certification_id', 'duration_minutes']);
        });
    }
};
