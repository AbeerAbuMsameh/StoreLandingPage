<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductBulkDiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $productIds = DB::table('products')->pluck('id')->toArray();

        foreach ($productIds as $productId) {
            $productBulkDiscounts[] = [
                'product_id' => $productId,
                'min' => $faker->numberBetween(1, 5),
                'max' => $faker->numberBetween(6, 10),
                'is_fixed' => $faker->boolean ? 1 : 0,
                'value' => $faker->randomFloat(2, 1, 100),
                'status' => $faker->boolean ? 1 : 0,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('product_bulk_discounts')->insert($productBulkDiscounts);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
