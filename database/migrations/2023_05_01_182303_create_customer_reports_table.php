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
        Schema::create('customer_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('customerCode')->unique();
            $table->string('customerName')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('paid')->nullable();
            $table->integer('amountDue')->nullable();
             $table->string('status')->nullable();
             $table->string('paumentStatus')->nullable();
             
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_reports');
    }
};