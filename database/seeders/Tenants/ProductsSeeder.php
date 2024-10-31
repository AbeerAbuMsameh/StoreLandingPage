<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();


        foreach (range(1, 10) as $index) {

            $name_en = $faker->words(3, true);
            $name_ar = translateToArabic($name_en);

            $description_en = $faker->paragraph;
            $description_ar = translateToArabic($description_en);

            $permalink_en = $faker->slug;
            $permalink_ar = translateToArabic($permalink_en);

            $meta_title_en = $faker->sentence;
            $meta_title_ar = translateToArabic($meta_title_en);

            $meta_description_en = $faker->paragraph;
            $meta_description_ar = translateToArabic($meta_description_en);

            $meta_keywords_en = $faker->word;
            $meta_keywords_ar = translateToArabic($meta_keywords_en[0]);

            $product_tags_en = $faker->word;
            $product_tags_ar = translateToArabic($product_tags_en[0]);

            $products[] = [
                'manufacturer_id' => $faker->numberBetween(1, 5),
                'name' => json_encode(['en' => $name_en, 'ar' => $name_ar], JSON_UNESCAPED_UNICODE),
                'description' => json_encode(['en' => $description_en, 'ar' => $description_ar], JSON_UNESCAPED_UNICODE),
                'permalink' => json_encode(['en' => $permalink_en, 'ar' => $permalink_ar], JSON_UNESCAPED_UNICODE),
                'meta_title' => json_encode(['en' => $meta_title_en, 'ar' => $meta_title_ar], JSON_UNESCAPED_UNICODE),
                'meta_description' => json_encode(['en' => $meta_description_en, 'ar' => $meta_description_ar], JSON_UNESCAPED_UNICODE),
                'meta_keywords' => json_encode(['en' => $meta_keywords_en, 'ar' => $meta_keywords_ar], JSON_UNESCAPED_UNICODE),
                'product_tags' => json_encode(['en' => $product_tags_en, 'ar' => $product_tags_ar], JSON_UNESCAPED_UNICODE),
                'image' => $faker->imageUrl(),
                'model' => $faker->word,
                'sku' => $faker->unique()->ean13,
                'weight' => $faker->randomFloat(2, 0, 1000),
                'height' => $faker->randomFloat(2, 0, 1000),
                'length' => $faker->randomFloat(2, 0, 1000),
                'width' => $faker->randomFloat(2, 0, 1000),
                'cost' => $faker->randomFloat(2, 0, 1000),
                'price' => $faker->randomFloat(2, 0, 1000),
                'selling_price' => $faker->randomFloat(2, 0, 1000),
                'discount_amount' => $faker->randomFloat(2, 0, 1000),
                'rate' => $faker->randomFloat(2, 0, 5),
                'quantity' => $faker->numberBetween(0, 100),
                'unlimited_quantity' => $faker->boolean,
                'stock_reach_message' => $faker->sentence,
                'is_outstock_notified' => $faker->boolean,
                'in_stock' => $faker->boolean,
                'is_featured' => $faker->boolean,
                'is_shipping_pickup' => $faker->boolean,
                'is_new_arrival' => $faker->boolean,
                'status' => 1,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('products')->insert($products);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
