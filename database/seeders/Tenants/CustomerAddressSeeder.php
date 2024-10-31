<?php

namespace Database\Seeders\Tenants;

use App\Models\City;
use App\Models\Country;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $countryIds = DB::connection('mysql')->table('countries')->pluck('id')->toArray();
        $cityIds = DB::connection('mysql')->table('cities')->pluck('id')->toArray();
        $userIds = DB::table('users')->pluck('id')->toArray();


        foreach (range(1, 10) as $index) {
            $customerAddresses[] = [
                'user_id' => $faker->randomElement($userIds),
                'city_id' => $faker->randomElement($cityIds),
                'country_id' => $faker->randomElement($countryIds),
                'full_name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone_code' => $faker->randomElement(['+1', '+964', '+91', '+86']),
                'phone' => $faker->phoneNumber,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'address' => $faker->address,
                'postal_code' => $faker->postcode,
                'type' => $faker->randomElement(['Home', 'Work']),
                'status' => $faker->boolean ? 1 : 0,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('customer_addresses')->insert($customerAddresses);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
