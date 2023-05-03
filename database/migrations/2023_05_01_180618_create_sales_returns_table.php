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
        Schema::create('sales_returns', function (Blueprint $table) {
            $table->id();
            $table->string('productName')->unique();
            $table->date('date')->nullable();
            $table->string('customerName')->unique();
            $table->string('status')->nullable();
             $table->string('GrandTotal')->nullable();
             $table->string('paid')->nullable();
             $table->date('due')->nullable();
             $table->string('paymentStatus')->nullable();
             
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_returns');
    }
};
