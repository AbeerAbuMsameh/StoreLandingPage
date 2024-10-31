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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('option_catalog_id')->constrained('option_catalogs')->cascadeOnDelete();
            $table->text('name')->nullable();
            $table->enum('input_type',['single_select','multi_select','date','text','file'])->default('single_select');
            $table->enum('value_type',['text','image','color'])->default('text');
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
        Schema::dropIfExists('options');
    }
};
