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
        Schema::create('product_bulk_discounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->integer('min')->default(1);
            $table->integer('max')->default(1);
            $table->tinyInteger('is_fixed')->default(1)->comment('0:percentage, 1:fixed');
            $table->double('value')->default(0.0);
            $table->tinyInteger('status')->default(1)->comment('0:Not active, 1:Active');
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
        Schema::dropIfExists('product_bulk_discounts');
    }
};
