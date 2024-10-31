<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        foreach (range(1, 5) as $index) {
            $name_en = $faker->unique()->word;

         $categories[] = [
                'name' => json_encode(['en' => $name_en, 'ar' => translateToArabic($name_en)], JSON_UNESCAPED_UNICODE),
                'description' => $faker->sentence,
                'parent_id' => null,
                'image' => $faker->imageUrl(),
                'permalink' => $faker->slug,
                'meta_title' => $faker->sentence,
                'meta_description' => $faker->paragraph,
                'meta_keywords' => implode(',', $faker->words(5)),
                'sort' => $faker->unique()->numberBetween(0, 5),
                'status' => $faker->boolean ? 1 : 0,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('categories')->insert($categories);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }

}
