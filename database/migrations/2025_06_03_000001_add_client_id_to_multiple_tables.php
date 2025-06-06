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
        // Add client_id to clients table
        // Schema::table('clients', function (Blueprint $table) {
        //     $table->string('client_id')->nullable()->after('id');
        //     $table->foreign('client_id')
        //         ->references('id')
        //         ->on('tenants')
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        // });

        // Add client_id to invoices table
        // Schema::table('invoices', function (Blueprint $table) {
        //     $table->string('client_id')->nullable()->after('id');
        //     $table->foreign('client_id')
        //         ->references('id')
        //         ->on('clients')
        //         ->onUpdate('cascade')
        //         ->onDelete('cascade');
        // });

        // Add client_id to products table
        Schema::table('products', function (Blueprint $table) {
            $table->string('client_id')->nullable()->after('id');
            // $table->foreign('client_id')
            //     ->references('id')
            //     ->on('clients')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
        });

        // Add client_id to categories table
        Schema::table('categories', function (Blueprint $table) {
            $table->string('client_id')->nullable()->after('id');
            // $table->foreign('client_id')
            //     ->references('id')
            //     ->on('clients')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
        });

        // Add client_id to invoice_items table
        Schema::table('invoice_items', function (Blueprint $table) {
            $table->string('client_id')->nullable()->after('id');
            // $table->foreign('client_id')
            //     ->references('id')
            //     ->on('clients')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
        });

        // Add client_id to taxes table
        Schema::table('taxes', function (Blueprint $table) {
            $table->string('client_id')->nullable()->after('id');
            // $table->foreign('client_id')
            //     ->references('id')
            //     ->on('clienys')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
        });

        // Add client_id to transactions table
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('client_id')->nullable()->after('id');
            // $table->foreign('client_id')
            //     ->references('id')
            //     ->on('tenants')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove foreign key and client_id from each table
        // Schema::table('clients', function (Blueprint $table) {
        //     $table->dropForeign(['client_id']);
        //     $table->dropColumn('client_id');
        // });

        // Schema::table('invoices', function (Blueprint $table) {
        //     $table->dropForeign(['client_id']);
        //     $table->dropColumn('client_id');
        // });

        Schema::table('products', function (Blueprint $table) {
            // $table->dropForeign(['client_id']);
            $table->dropColumn('client_id');
        });

        Schema::table('categories', function (Blueprint $table) {
            // $table->dropForeign(['client_id']);
            $table->dropColumn('client_id');
        });

        Schema::table('invoice_items', function (Blueprint $table) {
            // $table->dropForeign(['client_id']);
            $table->dropColumn('client_id');
        });

        Schema::table('taxes', function (Blueprint $table) {
            // $table->dropForeign(['client_id']);
            $table->dropColumn('client_id');
        });

        Schema::table('transactions', function (Blueprint $table) {
            // $table->dropForeign(['client_id']);
            $table->dropColumn('client_id');
        });
    }
};
