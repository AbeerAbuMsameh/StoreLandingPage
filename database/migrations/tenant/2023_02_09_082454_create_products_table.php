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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manufacturer_id')->nullable()->constrained('manufacturers')->nullOnDelete();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->string('permalink')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('product_tags')->nullable();
            $table->text('image')->nullable();
            $table->text('model')->nullable();
            $table->text('sku')->nullable();
            $table->double('weight')->default(0.0);
            $table->double('height')->default(0.0);
            $table->double('length')->default(0.0);
            $table->double('width')->default(0.0);
            $table->double('cost')->default(0.0);
            $table->double('price')->default(0.0);
            $table->double('selling_price')->default(0.0);
            $table->double('discount_amount')->default(0.0);
            $table->double('rate')->default(0.0);
            $table->integer('quantity')->default(0);
            $table->integer('unlimited_quantity')->default(0);
            $table->text('stock_reach_message')->nullable();
            $table->tinyInteger('is_outstock_notified')->default(0)->comment('0:No, 1:Yes');
            $table->tinyInteger('in_stock')->default(0)->comment('0:No, 1:Yes');
            $table->tinyInteger('is_featured')->default(0)->comment('0:No, 1:Yes');
            $table->tinyInteger('is_shipping_pickup')->default(0)->comment('0:No, 1:Yes');
            $table->tinyInteger('is_new_arrival')->default(0)->comment('0:No, 1:Yes');
            $table->tinyInteger('status')->default(1)->comment('0:Not active, 1:Active');
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
        Schema::dropIfExists('products');
    }
};
