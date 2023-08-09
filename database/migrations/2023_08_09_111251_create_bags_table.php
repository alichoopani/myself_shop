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
        Schema::create('bags', function (Blueprint $table) {
            $table->id();
            $table->string('brand')->nullable();
            $table->string('name');
            $table->unsignedBigInteger('height')->nullable();
            $table->unsignedBigInteger('width')->nullable();
            $table->unsignedBigInteger('length')->nullable();
            $table->unsignedBigInteger('weight')->nullable();
            $table->enum('color', ['White', 'Black', 'Purple', 'Red', 'Blue', 'Yellow', 'Pink', 'Gray', 'Green'])->nullable();
            $table->unsignedBigInteger('price');
            $table->boolean('approved')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bags');
    }
};
