<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->unique();
            $table->string('full_name')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('phone_code',10);
            $table->string('mobile',20);
            $table->date('dob')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->string('image')->nullable();
            $table->enum('gender',['Male','Female'])->nullable();
            $table->enum('status',['not_active','active','blocked'])->default('not_active');
            $table->tinyInteger('is_completed')->default(0)->comment('0:Not completed, 1:Completed');
            $table->tinyInteger('is_verified')->default(0)->comment('0:Not verified, 1:Verified');
            $table->boolean('is_notify')->default(true)->comment('0 false: Not notifiable,  1 true:  notifiable');
            $table->string('verification_code')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
