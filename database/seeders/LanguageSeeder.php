<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                'lang' => 'English',
                'code' => 'en',
                'flag' => 'languages/1qetDGkDZgXIFJGe6FwQKmVrqc7MLAiTjlKr0pja.png',
                'is_rtl' => 0,
                'status' => 1,
            ],
            [
                'lang' => 'Arabic',
                'code' => 'ar',
                'flag' => 'languages/1qetDGkDZgXIFJGe6FwQKmVrqc7MLAiTjlKr0pjI.png',
                'is_rtl' => 1,
                'status' => 1,
            ],
            [
                'lang' => 'Kurdish',
                'code' => 'ku',
                'flag' => 'languages/1qetDGkDZgXIFJGe6FwQKmVrqc7MLAiTjlKr0pjk.png',
                'is_rtl' => 0,
                'status' => 1,
            ],
        ];

        Language::insert($languages);

    }
}
