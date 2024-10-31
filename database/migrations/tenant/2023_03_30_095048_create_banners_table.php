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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->text('title');
            $table->enum('type', ['banner', 'sub_banner'])->default('banner');;
            $table->enum('section', ['all', 'home', 'categories', 'brands', 'filter', 'products', 'inside_product', 'orders', 'cart']);
            $table->integer('sort')->default(0);
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
        Schema::dropIfExists('banners');
    }
};
