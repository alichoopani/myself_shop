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
        Schema::create('phone_covers', function (Blueprint $table) {
            $table->id();
            $table->string('brand')->nullable();
            $table->string('name');
            $table->string('image');
            $table->string('phone_model');
            $table->enum('color', ['White', 'Black', 'Purple', 'Red', 'Blue', 'Yellow', 'Pink', 'Gray', 'Green'])->nullable();
            $table->enum('material', ['Leather', 'Plastic', 'Silicon'])->nullable();
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
        Schema::dropIfExists('phone_covers');
    }
};
