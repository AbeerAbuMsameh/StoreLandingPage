<?php

namespace Database\Seeders\Tenants;

use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $countryIds = DB::connection('mysql')->table('countries')->pluck('id')->toArray();
        $cityIds = DB::connection('mysql')->table('cities')->pluck('id')->toArray();
        $currencyIds = DB::connection('mysql')->table('currencies')->pluck('id')->toArray();
        $vendorsIds = DB::connection('mysql')->table('vendors')->pluck('id')->toArray();

        $latestCustomerId = DB::connection('mysql')->table('customers')->latest('id')->value('id');
        $customerId = $latestCustomerId + 1;

        $customers = [];
        $users = [];

        foreach (range($latestCustomerId + 1, $latestCustomerId + 10) as $customerId) {
            $customerData = [
                'vendor_id' => $faker->randomElement($vendorsIds),
                'full_name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone_code' => $faker->randomElement(['+1', '+964', '+91', '+86']),
                'mobile' => $faker->phoneNumber,
                'dob' => $faker->date,
                'country_id' => $faker->randomElement($countryIds),
                'city_id' => $faker->randomElement($cityIds),
                'currency_id' => $faker->randomElement($currencyIds),
                'image' => $faker->imageUrl(),
                'gender' => $faker->randomElement(['Male', 'Female']),
                'status' => $faker->randomElement(['not_active','active','blocked']),
                'is_completed' => $faker->boolean ? 1 : 0,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
                'deleted_at' => null,
            ];

            $customers[] = $customerData;
        }

        DB::connection('mysql')->table('customers')->insert($customers);

        $newCustomerIds = range($latestCustomerId + 1, $latestCustomerId + 10);


        foreach ($newCustomerIds as $customerId) {
            $customer = DB::connection('mysql')->table('customers')->where('id', $customerId)->first();

            if ($customer) {
                $userData = [
                    'customer_id' => $customer->id,
                    'full_name' => $customer->full_name,
                    'email' => $customer->email,
                    'password' => Hash::make('password'),
                    'phone_code' => $customer->phone_code,
                    'mobile' => $customer->mobile,
                    'dob' => $customer->dob,
                    'country_id' => $customer->country_id,
                    'city_id' => $customer->city_id,
                    'currency_id' => $customer->currency_id,
                    'image' => $customer->image,
                    'gender' => $customer->gender,
                    'status' => $faker->randomElement(['not_active','active','blocked']),
                    'is_completed' => $customer->is_completed,
                    'is_verified' => $faker->boolean ? 1 : 0,
                    'email_verified_at' => $faker->optional()->dateTime,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null,
                    'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => now(),
                ];

                $users[] = $userData;
            }
        }

// Insert users
        try {
            DB::table('users')->insert($users);
        } catch (\Exception $e) {
            Log::error('Database seeding failed: ' . $e->getMessage());
        }

    }
}
