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
        Schema::create('option_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('option_id')->constrained('options')->cascadeOnDelete();
            $table->text('option_value')->nullable();
            $table->string('option_image')->nullable();
            $table->string('option_code')->nullable();
            $table->enum('type',['general','special'])->default('general');
            $table->integer('sort')->default(0);
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
        Schema::dropIfExists('option_details');
    }
};
