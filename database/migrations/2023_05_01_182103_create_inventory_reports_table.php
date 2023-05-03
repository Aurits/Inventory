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
            $table->string('productName')->nullable();
            $table->string('sku')->nullable();
            $table->string('categoryName')->nullable();
            $table->integer('brandName')->nullable();
            $table->integer('price')->nullable();
            $table->string('unit')->nullable();
            $table->integer('InstockQnty')->nullable();
             
            $table->timestamps();
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
