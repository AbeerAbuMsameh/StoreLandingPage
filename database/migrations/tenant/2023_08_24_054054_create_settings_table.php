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

        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            //general
            $table->string('app_logo',150)->nullable();
            $table->string('footer_logo',150)->nullable();
            $table->string('header_logo',150)->nullable();
            $table->string('favicon',150)->nullable();
            $table->string('store_key',100)->nullable();
            $table->string('client_key')->nullable();
            $table->string('secret_key')->nullable();
            $table->string('title',100)->nullable();
            $table->string('mobile',50)->nullable();
            $table->string('phone_code',10)->nullable();
            $table->longText('description')->nullable();
            $table->string('default_sku',50)->nullable();
            $table->string('color',20)->nullable();
            $table->string('notification_key',150)->nullable();
            $table->string('currency',10)->nullable();
            $table->json('language',10)->nullable();
            $table->string('email',70)->nullable();
            $table->string('domain',50)->nullable();

            //social
            $table->string('twitter',100)->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('linkedin',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('whatsapp',100)->nullable();

            //seo
            $table->string('home_meta_keywords')->nullable();
            $table->string('home_meta_title',100)->nullable();
            $table->string('home_meta_description')->nullable();
            $table->string('sitemap',50)->nullable();
            $table->string('facebook_pixel',20)->nullable();
            $table->string('google_tags',20)->nullable();

            //address
            $table->string('country_id',5)->nullable();
            $table->string('city_id',10)->nullable();
            $table->string('street_address')->nullable();
            $table->string('postal_code',20)->nullable();
            $table->string('latitude',50)->nullable();
            $table->string('longitude',50)->nullable();

            //store details
            $table->integer('vendor_id')->nullable();
            $table->integer('subscription_id')->nullable();
            $table->integer('template_id')->nullable();
            $table->string('currently_sell',50)->nullable();
            $table->string('many_product_have',50)->nullable();
            $table->string('identity_papers',50)->nullable();
            $table->integer('currency_id')->nullable();
            $table->string('is_fixed_convert_rate',1)->nullable();
            $table->string('converted_rate',50)->nullable();
            $table->string('status',1)->nullable();
            $table->string('is_maintenance',1)->nullable();
            $table->string('is_alias',1)->nullable();
            $table->integer('language_id')->nullable();
            $table->boolean('is_cancel_order')->default(false);
            $table->boolean('is_refund_order')->default(false);
            $table->boolean('is_tax')->default(0);
            $table->double('tax')->nullable();
            $table->enum('refund_duration_type', ['hour', 'day'])->nullable();
            $table->integer('refund_duration')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
