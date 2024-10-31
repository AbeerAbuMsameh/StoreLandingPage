<?php

namespace Database\Seeders\Tenants;

use App\Models\PaymentMethod;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $userIds = DB::table('users')->pluck('id')->toArray();
        $paymentMethodIds = DB::connection('mysql')->table('payment_methods')->pluck('id')->toArray();
        $couponIds = DB::table('coupons')->pluck('id')->toArray();
        $addressIds = DB::table('customer_addresses')->pluck('id')->toArray();

        $orders = [];
        foreach (range(1, 10) as $index) {
            $orders[] = [
                'store_name' => $faker->company,
                'store_url' => $faker->url,
                'order_number' => $faker->unique()->numerify('ORDER####'),
                'user_id' => $faker->randomElement($userIds),
                'full_name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'payment_method_id' => $faker->randomElement($paymentMethodIds),
                'payment_method' => $faker->randomElement(['Credit Card', 'PayPal', 'Cash on Delivery']),
                'payment_status' => $faker->randomElement(['paid', 'not_paid']),
                'coupon_id' => $faker->randomElement($couponIds),
                'coupon_discount' => $faker->randomFloat(2, 0, 50),
                'coupon_discount_amount' => $faker->randomFloat(2, 0, 50),
                'address_id' => $faker->randomElement($addressIds),
                'address_full_name' => $faker->name,
                'address_email' => $faker->email,
                'address_phone' => $faker->phoneNumber,
                'address_postal_code' => $faker->postcode,
                'address_country' => $faker->country,
                'address_city' => $faker->city,
                'address_details' => $faker->address,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'note' => $faker->text,
                'shipping_cost' => $faker->randomFloat(2, 0, 20),
                'tax' => $faker->randomFloat(2, 0, 10),
                'total' => $faker->randomFloat(2, 50, 500),
                'sub_total' => $faker->randomFloat(2, 50, 500),
                'status' => $faker->randomElement(['pending', 'preparing', 'in_progress', 'refunded', 'completed', 'canceled']),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }


        try {
            DB::table('orders')->insert($orders);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
