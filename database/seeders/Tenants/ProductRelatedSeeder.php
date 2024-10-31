<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductRelatedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $productIds = DB::table('products')->pluck('id')->toArray();

        $productRelated = [];

        foreach ($productIds as $productId) {
            foreach (range(1, 3) as $index) {
                $relatedProductId = $faker->randomElement(array_diff($productIds, [$productId]));

                $productRelated[] = [
                    'product_id' => $productId,
                    'related_product_id' => $relatedProductId,
                    'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => now(),
                ];
            }
        }
        try {
            DB::table('product_related')->insert($productRelated);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
