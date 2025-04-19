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
        Schema::create('subscription_payments', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->integer('tenant_id');
            $table->integer('subscription_id');
            $table->decimal('amount', 10, 2)->default(0);
            $table->enum('payment_method', ['credit', 'cash', 'bank', 'mpesa'])->default('cash');
            $table->enum('status', ['successful', 'failed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_payments');
    }
};
