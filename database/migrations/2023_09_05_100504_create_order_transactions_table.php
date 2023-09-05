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
        Schema::create('order_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->decimal('final_price', 9, 0)->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_recv')->nullable();
            $table->mediumText('bank_send')->nullable();
            $table->mediumText('bank_log')->nullable();
            $table->enum('status', [
                'pending',
                'confirm',
                'canceled'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_transactions');
    }
};
