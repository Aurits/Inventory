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
        Schema::create('inventory_reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productName')->unsigned()->nullable();
            $table->string('sku')->nullable();
            $table->bigInteger('categoryName')->unsigned()->nullable();
            $table->bigInteger('brandName')->unsigned()->nullable();
            $table->integer('price')->nullable();
            $table->string('unit')->nullable();
            $table->integer('InstockQnty')->nullable();
             
            $table->timestamps();

            $table->foreign('categoryName')->references('id')->on('categories')->onDelete('cascade');

            $table->foreign('productName')->references('id')->on('products')->onDelete('cascade');

            $table->foreign('brandName')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_reports');
    }
};
