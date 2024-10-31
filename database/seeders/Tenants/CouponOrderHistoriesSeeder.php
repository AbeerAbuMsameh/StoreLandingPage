<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponOrderHistoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $couponIds = DB::table('coupons')->pluck('id')->toArray();
        $orderIds = DB::table('orders')->pluck('id')->toArray();
        $orderItemsIds = DB::table('order_items')->pluck('id')->toArray();

        $couponOrderHistories = [];
        foreach (range(1, 20) as $index) {
            $orderItemId = $faker->randomElement($orderItemsIds);

            $couponOrderHistories[] = [
                'coupon_id' => $faker->randomElement($couponIds),
                'order_id' => $faker->randomElement($orderIds),
                'order_item_id' => $orderItemId !== null ? $orderItemId : null,
                'code' => $faker->word,
                'discount_type' => $faker->randomElement(['percentage', 'fixed_product', 'fixed_cart']),
                'discount_amount' => $faker->randomFloat(2, 10, 100),
                'discount' => $faker->randomFloat(2, 5, 50),
                'is_free_shipping' => $faker->boolean,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }


        try {
            DB::table('coupon_order_histories')->insert($couponOrderHistories);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }

    }
}
