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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customerName')->unsigned()->nullable();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->bigInteger('country')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('country')->references('id')->on('countries')->onDelete('cascade');

            $table->foreign('customerName')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
