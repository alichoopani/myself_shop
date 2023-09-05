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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('product_id');
            $table->tinyInteger('quantity');
            $table->decimal('price', 9, 0)->nullable();
            $table->decimal('discounted_price', 9, 0)->nullable();
            $table->decimal('final_price', 9, 0)->nullable();
            $table->text('costumer_note')->nullable();
            $table->text('extras')->nullable();
            $table->boolean('approved')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
