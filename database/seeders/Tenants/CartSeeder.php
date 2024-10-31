<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $productIds = DB::table('products')->pluck('id')->toArray();
        $userIds = DB::table('users')->pluck('id')->toArray();
        $bulkDiscountIds = DB::table('product_bulk_discounts')->pluck('id')->toArray();


        $carts = [];

        foreach (range(1, 20) as $index) {
            $carts[] = [
                'user_id' => $faker->optional()->randomElement($userIds),
                'product_id' => $faker->optional()->randomElement($productIds),
                'bulk_discount_id' => $faker->optional()->randomElement($bulkDiscountIds),
                'options' => json_encode(['color' => $faker->safeColorName, 'size' => $faker->randomElement(['S', 'M', 'L', 'XL'])], JSON_UNESCAPED_UNICODE),
                'qty' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('carts')->insert($carts);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
