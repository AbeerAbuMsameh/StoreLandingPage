<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $optionCatalogsIds = DB::table('option_catalogs')->pluck('id')->toArray();

        foreach (range(1, 5) as $index) {
            $name_en = $faker->unique()->word;

            $options[] = [
                'option_catalog_id' => $faker->randomElement($optionCatalogsIds),
                'name' => json_encode(['en' => $name_en, 'ar' => translateToArabic($name_en)], JSON_UNESCAPED_UNICODE),
                'input_type' => $faker->randomElement(['single_select', 'multi_select', 'date', 'text', 'file']),
                'value_type' => $faker->randomElement(['text', 'image', 'color']),
                'sort' => $faker->unique()->numberBetween(0, 5),
                'status' => $faker->boolean ? 1 : 0,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('options')->insert($options);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
