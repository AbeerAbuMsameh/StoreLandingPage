<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPicturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $productPictures = [];

        $productIds = DB::table('products')->pluck('id')->toArray();

        foreach ($productIds as $productId) {
            $numPictures = $faker->numberBetween(1, 2);

            for ($i = 1; $i <= $numPictures; $i++) {
                $productPictures[] = [
                    'product_id' => $productId,
                    'picture' => $faker->imageUrl(),
                    'sort' => $i,
                    'status' => $faker->boolean ? 1 : 0,
                    'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => now(),
                ];
            }
        }

        try {
            DB::table('product_pictures')->insert($productPictures);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}
