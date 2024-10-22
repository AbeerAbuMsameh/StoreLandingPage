<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            ['title' => 'hero', 'status' => 1],
            ['title' => 'section1', 'status' => 1],
            ['title' => 'section2', 'status' => 1],
            ['title' => 'section3', 'status' => 1],
            ['title' => 'section4', 'status' => 1],
            ['title' => 'section5', 'status' => 1],
            ['title' => 'section6', 'status' => 1],
            ['title' => 'section7', 'status' => 1],
            ['title' => 'section8', 'status' => 1],
        ];

        Section::insert($sections);

    }
}
