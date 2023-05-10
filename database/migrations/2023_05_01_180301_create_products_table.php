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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name')->unique();
            $table->string('SKU');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('Brand_id')->unsigned()->nullable();
            $table->string('unit')->nullable();
            $table->decimal('price',8,2);
            $table->Integer('MainStore')->default(0);
            $table->Integer('Store2')->default(0);
            $table->Integer('Store3')->default(0);
            $table->bigInteger('MainStore_id')->unsigned()->nullable();;
            $table->bigInteger('Store2_id')->unsigned()->nullable();;
            $table->bigInteger('Store3_id')->unsigned()->nullable();;
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('Brand_id')->references('id')->on('brands')->onDelete('cascade');
            // $table->foreign('MainStore_id')->references('id')->on('stores')->onDelete('cascade');
            // $table->foreign('Store2_id')->references('id')->on('stores')->onDelete('cascade');
            // $table->foreign('Store3_id')->references('id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
