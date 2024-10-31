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
        Schema::create('payment_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('subscription_id')->nullable();
            $table->foreignId('vendor_id')->nullable();
            $table->enum('type',
                ['pay_interest', 'subscription', 'renew_subscription', 'cancel_subscription', 'upgrade_subscription', 'buy_template']
            );
            $table->string('num');
            $table->foreignId('currency_id');
            $table->double('fees');
            $table->double('subtotal');
            $table->double('total');
            $table->double('discount')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_histories');
    }
};
