<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('store_name')->nullable();
            $table->string('store_url')->nullable();
            $table->string('order_number')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
           $table->foreignId('payment_method_id')->nullable();
            $table->string('payment_method')->nullable();
            $table->enum('payment_status' , ['paid' , 'not_paid'])->default('not_paid');
            $table->foreignId('coupon_id')->nullable()->constrained('coupons');
            $table->double('coupon_discount')->default(0.0);
            $table->double('coupon_discount_amount')->default(0.0);
            $table->foreignId('address_id')->constrained('customer_addresses');
            $table->string('address_full_name')->nullable();
            $table->string('address_email')->nullable();
            $table->string('address_phone')->nullable();
            $table->string('address_postal_code')->nullable();
            $table->string('address_country')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_details')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('note')->nullable();
            $table->double('shipping_cost')->default(0.0);
            $table->double('refund_amount')->nullable();
            $table->foreignId('service_fees_id')->constrained('service_fees');
            $table->double('service_fees_amount')->default(0.0);
            $table->double('service_fees_balance')->default(0.0);
            $table->double('tax')->default(0.0);
            $table->double('total')->default(0.0);
            $table->double('sub_total')->default(0.0);
            $table->enum('status' , ['pending','preparing','in_progress','refunded','review_refund','completed','canceled'])->default('pending');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
