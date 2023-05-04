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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('References')->nullable();
            $table->bigInteger('from')->unsigned()->nullable();
            $table->bigInteger('paid')->unsigned()->nullable();
            $table->integer('item')->nullable();
             $table->integer('GrandTotal')->nullable();
            
            $table->timestamps();

            $table->foreign('paid')->references('id')->on('stores')->onDelete('cascade');

            $table->foreign('from')->references('id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
