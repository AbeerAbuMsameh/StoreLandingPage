<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $productVariationValuesIds = DB::table('product_variation_values')->pluck('id')->toArray();
        $optionIds = DB::table('options')->pluck('id')->toArray();
        $optionDetailsIds = DB::table('option_details')->pluck('id')->toArray();

        $productVariations = [];
        foreach ($productVariationValuesIds as $productVariationValuesId) {
            $productVariations[] = [
                'parent_id' => $productVariationValuesId,
                'option_id' => $faker->randomElement($optionIds),
                'option_detail_id' => $faker->optional()->randomElement($optionDetailsIds),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('product_variations')->insert($productVariations);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
