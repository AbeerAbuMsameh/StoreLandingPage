<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOptionValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $productOptionIds = DB::table('product_options')->pluck('id')->toArray();
        $optionDetailIds = DB::table('option_details')->pluck('id')->toArray();

        $productOptionValues = [];
        foreach (range(1, 10) as $index) {
            $productOptionValues[] = [
                'product_option_id' => $faker->randomElement($productOptionIds),
                'option_detail_id' => $faker->randomElement($optionDetailIds),
                'price_action' => $faker->randomElement(['+', '-']),
                'price_value' => $faker->randomFloat(2, 10, 100),
                'sort' => $faker->numberBetween(0, 10),
                'is_default' => $faker->boolean(20),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }
        try {
            DB::table('product_option_values')->insert($productOptionValues);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
