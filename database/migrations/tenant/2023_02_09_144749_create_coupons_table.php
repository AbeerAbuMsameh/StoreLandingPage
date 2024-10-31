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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->string('code')->unique();
            $table->enum('discount_type',['percentage', 'fixed_product','fixed_cart'])->default('fixed_cart');
            $table->double('discount_amount')->default(0.0);
            $table->double('min_spend')->default(0.0);
            $table->integer('usage_limit_per_coupon')->default(1);
            $table->integer('limit_usage_to_x_items')->default(1);
            $table->integer('usage_limit_per_user')->default(1);
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->tinyInteger('is_free_shipping')->default(0)->comment('0:No, 1:Yes');
            $table->tinyInteger('status')->default(0)->comment('0:Not active, 1:Active');
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
        Schema::dropIfExists('coupons');
    }
};
