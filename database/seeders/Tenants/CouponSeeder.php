<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $coupons = [];

        foreach (range(1, 5) as $index) {
            $name_en = $faker->words(3, true);
            $description_en = $faker->paragraph;

            $coupons[] = [
                'name' => json_encode(['en' => $name_en, 'ar' => translateToArabic($name_en)], JSON_UNESCAPED_UNICODE),
                'description' => json_encode(['en' => $description_en, 'ar' => translateToArabic($description_en)], JSON_UNESCAPED_UNICODE),
                'code' => $faker->unique()->bothify('COUPON###'),
                'discount_type' => $faker->randomElement(['percentage', 'fixed_product', 'fixed_cart']),
                'discount_amount' => $faker->randomFloat(2, 1, 100),
                'min_spend' => $faker->randomFloat(2, 0, 100),
                'usage_limit_per_coupon' => $faker->numberBetween(1, 10),
                'limit_usage_to_x_items' => $faker->numberBetween(1, 10),
                'usage_limit_per_user' => $faker->numberBetween(1, 5),
                'start_date' => $faker->dateTimeBetween('-1 month', '+1 month'),
                'end_date' => $faker->dateTimeBetween('+1 month', '+6 months'),
                'is_free_shipping' => $faker->boolean? 1 : 0,
                'status' => $faker->boolean(80) ? 1 : 0,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('coupons')->insert($coupons);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
