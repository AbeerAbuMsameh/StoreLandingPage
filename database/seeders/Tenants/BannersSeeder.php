<?php

namespace Database\Seeders\Tenants;


use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $banners = [];

        foreach (range(1, 10) as $index) {
            $banners[] = [
                'image' => $faker->imageUrl(),
                'title' => $faker->sentence(),
                'type' => $faker->randomElement(['banner', 'sub_banner']),
                'sort' => $faker->unique()->numberBetween(0, 10),
                'status' => $faker->boolean(80),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('banners')->insert($banners);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
