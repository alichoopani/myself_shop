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
        Schema::create('order_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id');
            $table->text('note');
            $table->enum('status', [
                'payment-pending',
                'payment-confirm',
                'payment-cancel',
                'refund-pending',
                'refund-confirm',
                'processing',
                'add-to-cart',
                'delivery-started',
                'delivered',
                'canceled-by-admin',
                'canceled-by-seller',
                'canceled-by-customer'
            ]);
            $table->boolean('approved')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_histories');
    }
};
