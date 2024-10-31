<?php

namespace Database\Seeders\Tenants;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        foreach (range(1, 6) as $index) {
            $question_en = $faker->paragraph;
            $answer_en = $faker->paragraph;
            $faqs[] = [
                'question' => json_encode(['en' => $question_en, 'ar' => translateToArabic($question_en)], JSON_UNESCAPED_UNICODE),
                'answer' => json_encode(['en' => $answer_en, 'ar' => translateToArabic($answer_en)], JSON_UNESCAPED_UNICODE),
                'status' => $faker->boolean ? 1 : 0,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('faqs')->insert($faqs);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }

    }
}
