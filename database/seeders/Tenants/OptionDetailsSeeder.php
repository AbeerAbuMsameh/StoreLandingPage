<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $optionIds = DB::table('options')->pluck('id')->toArray();

        foreach (range(1, 5) as $index) {
            $name_en = $faker->unique()->word;

            $optionDetails[] = [
                'option_id' => $faker->randomElement($optionIds),
                'option_value' => json_encode(['en' => $name_en, 'ar' => translateToArabic($name_en)], JSON_UNESCAPED_UNICODE),
                'option_image' => $faker->imageUrl(),
                'option_code' => $faker->hexColor(),
                'type' => $faker->randomElement(['general', 'special']),
                'sort' => $faker->unique()->numberBetween(0, 5),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('option_details')->insert($optionDetails);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
