<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $categoryIds = DB::table('categories')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();

        $categoryProducts = [];

        foreach (range(1, 10) as $index) {
            $categoryProducts[] = [
                'category_id' => $faker->randomElement($categoryIds),
                'product_id' => $faker->randomElement($productIds),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('category_product')->insert($categoryProducts);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
