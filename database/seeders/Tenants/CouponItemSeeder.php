<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $couponIds = DB::table('coupons')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();
        $categoryIds = DB::table('categories')->pluck('id')->toArray();

        $couponItems = [];

        foreach (range(1, 20) as $index) {
            $type = $faker->randomElement(['product', 'category']);

            if ($type === 'product') {
                $couponItems[] = [
                    'coupon_id' => $faker->randomElement($couponIds),
                    'product_id' => $faker->randomElement($productIds),
                    'category_id' => null,
                    'type' => $type,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            } else {
                $couponItems[] = [
                    'coupon_id' => $faker->randomElement($couponIds),
                    'product_id' => null,
                    'category_id' => $faker->randomElement($categoryIds),
                    'type' => $type,
                    'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => now(),
                ];
            }
        }

        try {
            DB::table('coupon_items')->insert($couponItems);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
