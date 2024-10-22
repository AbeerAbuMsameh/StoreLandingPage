<?php

namespace Database\Seeders;

use App\Models\Packages\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create([
            'name' => 'Free Package',
            'num_of_category' => 5,
            'num_of_product' => 100,
            'color' => '#00A5BF',
            'best_selling' => 1,
            'is_free' => 1,
            'status' => 1,
        ]);
    }
}
