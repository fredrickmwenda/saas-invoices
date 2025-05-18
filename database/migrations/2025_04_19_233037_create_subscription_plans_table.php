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
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('currency')->default('USD');
            $table->decimal('price', 10, 2)->default(0);
            $table->integer('duration')->default(1);
            $table->enum('duration_unit', ['day', 'week', 'month', 'year'])->default('month');
            $table->integer('trial_period')->default(0);
            $table->enum('trial_period_unit', ['day', 'week', 'month', 'year'])->default('day');
            $table->enum('status', ['active', 'inactive', 'archived'])->default('active');
            //features as json
            $table->json('features');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
