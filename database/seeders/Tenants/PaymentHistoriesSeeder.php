<?php

namespace Database\Seeders\Tenants;

use App\Models\Currency;
use App\Models\Vendor;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentHistoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $currencyIds =  DB::connection('mysql')->table('currencies')->pluck('id')->toArray();
        $vendorIds =  DB::connection('mysql')->table('vendors')->pluck('id')->toArray();

        $paymentHistories = [];

        foreach (range(1, 50) as $index) {
            $paymentHistories[] = [
                'vendor_id' => $faker->randomElement($vendorIds),
                'type' => $faker->randomElement(['pay_interest', 'subscription', 'renew_subscription', 'cancel_subscription', 'buy_template']),
                'num' => $faker->numerify('PAY#####'),
                'wallet_balance_before' => $faker->randomFloat(2, 0, 1000),
                'wallet_balance_after' => $faker->randomFloat(2, 0, 1000),
                'currency_id' => $faker->randomElement($currencyIds),
                'fees' => $faker->randomFloat(2, 0, 100),
                'subtotal' => $faker->randomFloat(2, 0, 1000),
                'total' => $faker->randomFloat(2, 0, 1000),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('payment_histories')->insert($paymentHistories);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
