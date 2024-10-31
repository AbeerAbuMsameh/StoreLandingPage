<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $orderIds = DB::table('orders')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();
        $couponIds = DB::table('coupons')->pluck('id')->toArray();
        $bulkDiscountIds = DB::table('product_bulk_discounts')->pluck('id')->toArray();

        $orderItems = [];
        foreach (range(1, 20) as $index) {
            $orderItems[] = [
                'order_id' => $faker->randomElement($orderIds),
                'product_id' => $faker->randomElement($productIds),
                'name' => $faker->word,
                'model' => $faker->word,
                'coupon_id' => $faker->randomElement($couponIds),
                'coupon_discount' => $faker->randomFloat(2, 0, 50),
                'coupon_discount_amount' => $faker->randomFloat(2, 0, 50),
                'bulk_discount_id' => $faker->randomElement($bulkDiscountIds),
                'bulk_discount_amount' => $faker->randomFloat(2, 0, 50),
                'bulk_discount_min_quantity' => $faker->numberBetween(1, 5),
                'bulk_discount_max_quantity' => $faker->numberBetween(6, 10),
                'quantity' => $faker->numberBetween(1, 10),
                'unit_price' => $faker->randomFloat(2, 10, 100),
                'unit_sale_price' => $faker->randomFloat(2, 5, 90),
                'sub_total' => $faker->randomFloat(2, 50, 500),
                'total' => $faker->randomFloat(2, 50, 500),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('order_items')->insert($orderItems);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }

}
