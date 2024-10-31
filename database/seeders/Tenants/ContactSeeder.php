<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $contacts = [];

        foreach (range(1, 10) as $index) {
            $contacts[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'country_code' => $faker->countryCode,
                'phone' => $faker->phoneNumber,
                'subject' => $faker->sentence,
                'message' => $faker->paragraph,
                'message_by' => $faker->randomElement(['Admin', 'Reseller', 'Vendor', 'User']),
                'is_read' => $faker->boolean() ? 1 : 0,
                'is_response' =>$faker->boolean() ? 1 : 0,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('contacts')->insert($contacts);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
