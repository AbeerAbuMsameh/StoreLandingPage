<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoritesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $userIds = DB::table('users')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();

        $favoritesData = [];

        foreach ($userIds as $userId) {
            foreach (range(1, 2) as $index) {
                $favoritesData[] = [
                    'user_id' => $userId,
                    'product_id' => $faker->randomElement($productIds),
                ];
            }
        }

        try {
            DB::connection('tenant')->table('favorites')->insert($favoritesData);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }

    }
}
