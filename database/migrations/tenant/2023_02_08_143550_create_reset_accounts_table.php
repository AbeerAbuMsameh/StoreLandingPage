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
        Schema::create('reset_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('email')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('code')->nullable();
            $table->enum('type',['Admin','Reseller','Vendor','User'])->nullable();
            $table->tinyInteger('status')->default(0)->comment('0:Not Rested, 1:Rested');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reset_accounts');
    }
};
