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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->text('color_id')->nullable();
            $table->string('image');
            $table->mediumText('images')->nullable();
            $table->string('guarantee')->nullable();
            $table->string('unit')->nullable();
            $table->string('dimension')->nullable();
            $table->decimal('weight', 7, 3)->nullable();
            $table->integer('quantity')->nullable();
            $table->tinyInteger('ordering')->nullable();
            $table->enum('status', [
                'normal',
                'special',
                'offer',
                'discount'
            ])->nullable();
            $table->timestamp('end_time')->nullable();
            $table->decimal('discount_rate', 9, 0)->nullable();
            $table->decimal('buy_price', 9, 0)->nullable();
            $table->decimal('product_price', 9, 0)->nullable();
            $table->decimal('discounted_price', 9, 0)->nullable();
            $table->decimal('final_price', 9, 0)->nullable();
            $table->integer('hits')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->boolean('approved')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
