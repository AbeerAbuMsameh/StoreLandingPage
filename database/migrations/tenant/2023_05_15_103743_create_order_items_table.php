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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('product_id')->constrained('products');
            $table->text('name')->nullable();
            $table->string('model')->nullable();
            $table->foreignId('coupon_id')->nullable()->constrained('coupons');
            $table->double('coupon_discount')->default(0.0);
            $table->double('coupon_discount_amount')->default(0.0);
            $table->foreignId('bulk_discount_id')->nullable()->constrained('product_bulk_discounts');
            $table->double('bulk_discount_amount')->default(0.0);
            $table->integer('bulk_discount_min_quantity')->default(0);
            $table->integer('bulk_discount_max_quantity')->default(0);
            $table->integer('quantity')->default(0);
            $table->double('unit_price')->default(0.0);
            $table->double('unit_sale_price')->default(0.0);
            $table->double('sub_total')->default(0.0);
            $table->double('total')->default(0.0);
            $table->enum('status' , ['pending','preparing','in_progress','refunded', 'review_refund','completed','canceled'])->default('pending');
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
        Schema::dropIfExists('order_items');
    }
};
