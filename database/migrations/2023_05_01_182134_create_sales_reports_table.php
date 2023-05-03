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
        Schema::create('sales_reports', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('customerName')->unique();
            $table->string('Referances')->nullable();
            $table->string('status')->nullable();
             $table->string('payment')->nullable();
             $table->integer('Total')->nullable();
             $table->string('paid')->nullable();
             $table->date('due')->nullable();
             $table->string('Biller')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_reports');
    }
};
