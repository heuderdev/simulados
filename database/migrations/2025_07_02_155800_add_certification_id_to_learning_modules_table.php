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
        Schema::table('learning_modules', function (Blueprint $table): void {
            $table->foreignId('certification_id')->after('id')->constrained()->onDelete('cascade');
            $table->index(['certification_id', 'is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('learning_modules', function (Blueprint $table): void {
            $table->dropForeign(['certification_id']);
            $table->dropColumn('certification_id');
        });
    }
};
