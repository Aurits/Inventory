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
        Schema::create('supplier_reports', function (Blueprint $table) {
            $table->id();
            $table->date('purchasedDate')->nullable();
            $table->bigInteger('productName')->unsigned()->nullable();
            $table->integer('purchasedAmount')->nullable();
            $table->integer('purchasedQnty')->nullable();
            $table->integer('paid')->nullable();
            $table->integer('balance')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('productName')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_reports');
    }
};
