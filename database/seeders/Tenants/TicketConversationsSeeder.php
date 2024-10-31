<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketConversationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $ticketIds = DB::table('tickets')->pluck('id')->toArray();

        $conversationsData = [];

        foreach (range(1, 20) as $index) {
            $conversationsData[] = [
                'ticket_id' => $faker->randomElement($ticketIds),
                'sender_type' => $faker->randomElement(['vendor', 'user']),
                'message' => $faker->paragraph,
                'attachment' => $faker->optional()->imageUrl(),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('ticket_conversations')->insert($conversationsData);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }

    }
}
