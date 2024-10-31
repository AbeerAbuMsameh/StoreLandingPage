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
        Schema::create('product_variation_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->string('image')->nullable();
            $table->double('weight')->default(0.0);
            $table->double('height')->default(0.0);
            $table->double('length')->default(0.0);
            $table->double('width')->default(0.0);
            $table->double('price')->default(0.0);
            $table->double('cost_price')->default(0.0);
            $table->double('discount_amount')->default(0.0);
            $table->double('sale_price')->default(0.0);
            $table->integer('quantity')->default(0);
            $table->tinyInteger('is_unlimited')->default(1)->comment('0:No, 1:Yes');
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
        Schema::dropIfExists('product_variation_values');
    }
};
