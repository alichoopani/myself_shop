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
        Schema::create('tuning_parts', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('name');
            $table->string('car_model');
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
        Schema::dropIfExists('tuning_parts');
    }
};
