<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $userIds = DB::table('users')->pluck('id')->toArray();


        $tickets = [];

        foreach (range(1, 20) as $index) {
            $tickets[] = [
                'ticket_num' => $faker->unique()->numerify('TK#####'),
                'user_id' => $faker->randomElement($userIds),
                'type' => 'vendor',
                'subject' => $faker->sentence(),
                'description' => $faker->paragraph(),
                'attachment' => null,
                'status' => $faker->randomElement(['open','pending', 'complete', 'closed']),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('tickets')->insert($tickets);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
