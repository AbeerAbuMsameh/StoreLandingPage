<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'header_logo' => 'Logo-header.png',
            'footer_logo' => 'Logo-footer.png',
            'title' => ['en' => 'Konin Store', 'ar' => 'متجر كونين'],
            'mobile' => '+9754841255',
            'footer_description' => '{"en":"One platform to sell, ship, and market for your products on the web, on social media channels, and through a mobile app, with tons of built-in features, apps, tools, and services.","ar":"منصة واحدة لبيع وشحن وتسويق منتجاتك عبر الويب، وعبر مواقع التواصل الاجتماعي، ومن خلال تطبيق محمول، مع العديد من الميزات والتطبيقات والأدوات والخدمات المدمجة.","ku":"یەک پلاتفۆڕم بۆ فڕۆشتن ،ناردن وە بازاڕەکان بۆ بەرهەمەکانت لە وێبدا , لە کەناڵەکانی سۆشیال میدیا وە لەڕێگەی ئاپی مۆبایلەوە و , لەگەڵ تۆنێک لە... تایبەتمەندییە ناوەکییەکان ئاپەکان, ئامرازەکان, وە خزمەتگوزاریەکان."}',
            'email' => 'info@koninstore.com',
            'home_meta_keywords' => ['en' => 'Konin, store, quality', 'ar' => 'كونين, متجر, جودة'],
            'home_meta_title' => ['en' => 'Welcome to Konin Store', 'ar' => 'مرحبا بكم في متجر كونين'],
            'home_meta_description' => ['en' => 'We offer the best services and products at Konin Store', 'ar' => 'نحن نقدم أفضل الخدمات والمنتجات في متجر كونين'],
            'sitemap' => 'koninStore.xml',
            'twitter' => 'https://twitter.com/koninstore',
            'facebook' => 'https://facebook.com/koninstore',
            'linkedin' => 'https://linkedin.com/company/koninstore',
            'instagram' => 'https://instagram.com/koninstore',
            'whatsapp' => 'https://whatsapp.com/koninstore',
            'facebook_pixel' => 'test,test2',
            'google_tags' => 'test,test2',
        ]);
    }
}
