<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $productIds = DB::table('products')->pluck('id')->toArray();
        $optionIds = DB::table('options')->pluck('id')->toArray();


        foreach ($productIds as $productId) {
            foreach (range(1, 2) as $index) {
                $productOptions[] = [
                    'product_id' => $productId,
                    'option_id' => $faker->randomElement($optionIds),
                    'is_require' => $faker->boolean,
                    'is_upload_image' => $faker->boolean,
                    'is_main_image' => $faker->boolean,
                    'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => now(),
                ];
            }
        }

        try {
            DB::table('product_options')->insert($productOptions);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
