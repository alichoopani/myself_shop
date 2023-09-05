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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('address_id');
            $table->tinyInteger('quantity');
            $table->decimal('items_price', 9, 0);
            $table->decimal('items_discount', 9, 0);
            $table->decimal('delivery_price', 9, 0);
            $table->decimal('tax', 9, 0);
            $table->decimal('final_price', 9, 0);
            $table->string('tracking_code')->nullable();
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
