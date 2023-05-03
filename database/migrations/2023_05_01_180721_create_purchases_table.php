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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('SupplierName')->unique();
            $table->string('References')->unique();
            $table->date('date')->nullable();
            $table->string('status')->nullable();
             $table->integer('GrandTotal')->nullable();
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
        Schema::dropIfExists('purchases');
    }
};
