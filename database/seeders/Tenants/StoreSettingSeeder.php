<?php

namespace Database\Seeders\Tenants;

use App\Models\Setting;
use App\Models\Tenant\StoreSettings;
use Illuminate\Database\Seeder;

class StoreSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings =
            [
                'app_logo' => 'aa',
                'footer_logo',
                'header_logo',
                'title',
                'mobile',
                'phone_code',
                'description',
                'default_sku',
                'color',
                'notification_key',
                'currency',
                'language',
                'email',
                'domain',
                'twitter',
                'facebook',
                'linkedin',
                'instagram',
                'whatsapp',
                'home_meta_keywords',
                'home_meta_title',
                'home_meta_description',
                'sitemap',
                'facebook_pixel',
                'google_tags',
                'country',
                'city',
                'street_address',
                'postal_code',
                'latitude',
                'longitude',

                'vendor_id',
                'subscription_id',
                'subscription_type',
                'template_id',
                'default_template',
                'display_category_id',
                'identity_papers',
                'currency_id',
                'is_fixed_convert_rate',
                'converted_rate',
                'status',
                'is_maintenance',
                'is_alias',
                'language_id',
                'default_language_status',
            ];
        StoreSettings::create($settings);
    }
}
