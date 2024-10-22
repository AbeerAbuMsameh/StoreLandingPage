<?php

namespace Database\Seeders;

use App\Models\Packages\FreePackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FreePackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'package_id' => 1,
                'package_category_id' => 1,
                'is_limited' => 1,
                'duration_unit' => 'daily',
                'duration' => 15,
                'country_id' => 1,
            ],
            [
                'package_id' => 1,
                'package_category_id' => 1,
                'is_limited' => 1,
                'duration_unit' => 'daily',
                'duration' => 30,
                'country_id' => 2,
            ],
            [
                'package_id' => 1,
                'package_category_id' => 1,
                'is_limited' => 1,
                'duration_unit' => 'daily',
                'duration' => 30,
                'country_id' => 3,
            ],
        ];

        FreePackage::insert($packages);
    }
}
