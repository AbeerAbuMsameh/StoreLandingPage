<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $orderItemIds = DB::table('order_items')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();
        $optionIds = DB::table('options')->pluck('id')->toArray();
        $optionDetailIds = DB::table('option_details')->pluck('id')->toArray();

        $orderOptions = [];
        foreach (range(1, 20) as $index) {
            $orderOptions[] = [
                'order_item_id' => $faker->randomElement($orderItemIds),
                'product_id' => $faker->randomElement($productIds),
                'option_id' => $faker->randomElement($optionIds),
                'option_detail_id' => $faker->randomElement($optionDetailIds),
                'option_name' => $faker->word,
                'option_value' => $faker->word,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('order_options')->insert($orderOptions);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }

    }
}
