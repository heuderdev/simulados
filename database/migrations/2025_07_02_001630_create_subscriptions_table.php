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
        Schema::create('subscriptions', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('plan_id');
            $table->decimal('price', 8, 2);
            $table->dateTime('starts_at')->useCurrent();
            $table->dateTime('ends_at');
            $table->string('status')->default('active');
            $table->string('payment_method');
            $table->string('payment_id')->nullable(); // ID do gateway de pagamento
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
