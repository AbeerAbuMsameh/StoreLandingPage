<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $mediaData = [];
        foreach (range(1, 20) as $index) {
            $title_en = $faker->unique()->word;


            $mediaData[] = [
                'title' => json_encode(['en' => $title_en, 'ar' => translateToArabic($title_en)], JSON_UNESCAPED_UNICODE),
                'type' => $faker->randomElement(['image', 'video', 'code']),
                'attachment' => $faker->imageUrl(640, 480, 'cats', true, 'Faker', true), // or use other appropriate faker methods
                'status' => $faker->boolean() ? 1 : 0,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('media')->insert($mediaData);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }

    }
}
