<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariationValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $productIds = DB::table('products')->pluck('id')->toArray();

        $productVariationValues = [];
        foreach ($productIds as $productId) {
            $productVariationValues[] = [
                'product_id' => $productId,
                'image' => $faker->imageUrl(),
                'weight' => $faker->randomFloat(2, 0, 100),
                'height' => $faker->randomFloat(2, 0, 100),
                'length' => $faker->randomFloat(2, 0, 100),
                'width' => $faker->randomFloat(2, 0, 100),
                'price' => $faker->randomFloat(2, 10, 100),
                'cost_price' => $faker->randomFloat(2, 5, 50),
                'discount_amount' => $faker->randomFloat(2, 0, 20),
                'sale_price' => $faker->randomFloat(2, 5, 90),
                'quantity' => $faker->numberBetween(0, 100),
                'is_unlimited' => $faker->boolean(80),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('product_variation_values')->insert($productVariationValues);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
