<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_option_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_option_id')->constrained('product_options')->cascadeOnDelete();
            $table->foreignId('option_detail_id')->constrained('option_details')->cascadeOnDelete();
            $table->enum('price_action',["+" , "-"]);
            $table->double('price_value')->default(0.0);
            $table->integer('sort')->default(0);
            $table->tinyInteger('is_default')->default(0)->comment('0:Not Default, 1:Default');
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
        Schema::dropIfExists('product_option_values');
    }
};
