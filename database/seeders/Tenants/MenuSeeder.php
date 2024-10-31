<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $pageIds = DB::table('pages')->pluck('id')->toArray();
        $menuIds = DB::table('menus')->pluck('id')->toArray();

        $menus = [];

        foreach (range(1, 10) as $index) {

            $title_en = $faker->words(3, true);

            $menus[] = [
                'title' => json_encode([
                    'en' => $title_en,
                    'ar' => translateToArabic($title_en),
                ], JSON_UNESCAPED_UNICODE),
                'parent_id' => $faker->optional()->randomElement($menuIds),
                'position' => $faker->randomElement(['header', 'footer']),
                'sort' => $faker->unique()->numberBetween(0, 10),
                'page_id' => $faker->optional()->randomElement($pageIds),
                'url_link' =>json_encode([
                    'en' => $faker->url,
                    'ar' => $faker->url,
                ], JSON_UNESCAPED_UNICODE),
                'status' => $faker->boolean ? 1 : 0,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('menus')->insert($menus);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
