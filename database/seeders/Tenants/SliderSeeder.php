<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $productIds = DB::table('products')->pluck('id')->toArray();

        $sliders = [];

        foreach (range(1, 10) as $index) {

            $name_en = $faker->words(3, true);
            $sliders[] = [
                'product_id' => $faker->optional()->randomElement($productIds),
                'name' => json_encode([
                    'en' => $name_en,
                    'ar' => translateToArabic($name_en),
                ], JSON_UNESCAPED_UNICODE),
                'image' => $faker->imageUrl(),
                'clicks' => $faker->numberBetween(0, 100),
                'type' => $faker->randomElement(['slider', 'banner', 'new_arrival']),
                'status' => $faker->boolean ? 1 : 0,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('sliders')->insert($sliders);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
