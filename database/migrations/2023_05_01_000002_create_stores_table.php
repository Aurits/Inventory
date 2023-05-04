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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('storeName')->unique();
            $table->bigInteger('StoreLocation')->unsigned()->nullable();
            $table->integer('phone')->unique();
            $table->string('email')->unique();
             $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('StoreLocation')->references('id')->on('states')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
