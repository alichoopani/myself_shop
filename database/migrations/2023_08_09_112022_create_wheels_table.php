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
        Schema::create('wheels', function (Blueprint $table) {
            $table->id();
            $table->string('brand')->nullable();
            $table->string('name');
            $table->string('image');
            $table->unsignedBigInteger('size');
            $table->unsignedBigInteger('weight');
            $table->unsignedBigInteger('width');
            $table->unsignedBigInteger('lug_nut_form');
            $table->enum('color', ['black', 'gray', 'silver', 'white', 'bronze', 'chrome', 'etc']);
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
        Schema::dropIfExists('wheels');
    }
};
