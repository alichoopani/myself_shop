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
        Schema::create('tyres', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('name');
            $table->string('speed_rating');
            $table->string('structure');
            $table->string('load_index');
            $table->date('create_week');
            $table->unsignedBigInteger('size');
            $table->unsignedBigInteger('weight');
            $table->unsignedBigInteger('width');
            $table->unsignedBigInteger('grip');
            $table->string('top_speed_rating');
            $table->boolean('approved')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tyres');
    }
};
