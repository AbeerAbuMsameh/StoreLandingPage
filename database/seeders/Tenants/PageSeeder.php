<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $pages = [];

        foreach (range(1, 10) as $index) {
            $title_en = $faker->sentence;
            $description_en = $faker->paragraph;
            $styles_en = $faker->paragraph;
            $permalink_en = $faker->slug;
            $meta_title_en = $faker->sentence;
            $meta_description_en = $faker->paragraph;
            $keyword_en = $faker->word;

            $pages[] = [
                'title' => json_encode(['en' => $title_en, 'ar' => translateToArabic($title_en)], JSON_UNESCAPED_UNICODE),
                'description' => json_encode(['en' => $description_en, 'ar' => translateToArabic($description_en)], JSON_UNESCAPED_UNICODE),
                'styles' => json_encode(['en' => $styles_en, 'ar' => translateToArabic($styles_en)], JSON_UNESCAPED_UNICODE),
                'permalink' => json_encode(['en' => $permalink_en, 'ar' => translateToArabic($permalink_en)], JSON_UNESCAPED_UNICODE),
                'meta_title' => json_encode(['en' => $meta_title_en, 'ar' =>  translateToArabic($meta_title_en)], JSON_UNESCAPED_UNICODE),
                'meta_description' => json_encode(['en' => $meta_description_en, 'ar' => translateToArabic($meta_description_en)], JSON_UNESCAPED_UNICODE),
                'keyword' => json_encode(['en' => $keyword_en, 'ar' => translateToArabic($keyword_en)], JSON_UNESCAPED_UNICODE),
                'type' => $faker->randomElement(['page', 'email', 'newsletter']),
                'status' => $faker->randomElement([0, 1]),
                'is_static' => $faker->randomElement([0, 1]),
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('pages')->insert($pages);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
