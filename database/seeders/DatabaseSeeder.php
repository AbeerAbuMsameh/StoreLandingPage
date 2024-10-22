<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //  SectionsTableSeeder::class,
             // PackageCategorySeeder::class,
             // LanguageSeeder::class,
            //  CurrencySeeder::class,
              CountrySeeder::class,
              PackageSeeder::class,
              FreePackageSeeder::class,
              SettingSeeder::class,
        ]);
    }
}
