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
        Schema::create('crank_shafts', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('name');
            $table->string('image');
            $table->boolean('casting_method')->default(0);
            $table->string('weight');
            $table->string('number_of_cylinder');
            $table->string('engine_name');
            $table->unsignedBigInteger('price');
            $table->boolean('warranty')->default(0);
            $table->boolean('approved')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crank_shafts');
    }
};
