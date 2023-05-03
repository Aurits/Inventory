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
        Schema::create('purchase_returns', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->date('date')->nullable();
            $table->string('supplier')->nullable();
            $table->string('reference')->nullable();
            $table->string('status')->nullable();
             $table->integer('GrandTotal')->nullable();
             $table->integer('paid')->nullable();
             $table->integer('due')->nullable();
             $table->string('paymentStatus')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_returns');
    }
};
