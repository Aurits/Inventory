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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productName')->unsigned()->nullable();
            $table->string('References')->unique();
            $table->bigInteger('CustomerName')->unsigned()->nullable();
            $table->string('status')->nullable();
             $table->integer('GrandTotal')->nullable();
            
            $table->timestamps();

            $table->foreign('productName')->references('id')->on('products')->onDelete('cascade');

            $table->foreign('CustomerName')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
