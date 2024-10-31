<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $productIds = DB::table('products')->pluck('id')->toArray();
        $userIds = DB::table('users')->pluck('id')->toArray();

        $productRatings = [];

        foreach (range(1, 10) as $index) {
            $productRatings[] = [
                'product_id' => $faker->randomElement($productIds),
                'user_id' => $faker->randomElement($userIds),
                'rating' => $faker->numberBetween(1, 5),
                'comment' => $faker->optional()->sentence,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('product_ratings')->insert($productRatings);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
