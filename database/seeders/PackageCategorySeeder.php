<?php

namespace Database\Seeders;

use App\Models\Packages\PackageCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new PackageCategory();
        $category->setTranslation('name', 'en', 'Free');
        $category->setTranslation('name', 'ar', 'مجاني');
        $category->setTranslation('name', 'ku', 'Bêpêş');
        $category->sort = 2;
        $category->is_selected = 1;
        $category->status = 1;
        $category->save();
    }
}
