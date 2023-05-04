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
            $table->bigInteger('productName')->unsigned()->nullable();
            $table->date('date')->nullable();
            $table->bigInteger('customerName')->unsigned()->nullable();
            $table->string('status')->nullable();
             $table->string('GrandTotal')->nullable();
             $table->string('paid')->nullable();
             $table->date('due')->nullable();
             $table->string('paymentStatus')->nullable();
             
            $table->timestamps();

            $table->foreign('productName')->references('id')->on('products')->onDelete('cascade');

            $table->foreign('customerName')->references('id')->on('customers')->onDelete('cascade');
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
