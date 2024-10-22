<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'id' => 1,
                'name' => '{"en":"Lebanon","ar":"لبنان"}',
                'iso2' => 'LB',
                'iso3' => 'LBN',
                'country_numeric' => '422',
                'country_code' => '+961',
                'flag' => 'countries/flag_lebanon.png',
                'currency' => NULL,
                'currency_id' => 1,  // USD
                'language_id' => 2,  // Arabic
                'status' => 1,
                'created_by' => NULL,
                'updated_by' => NULL,
                'created_at' => now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ], [
                'id' => 2,
                'name' => '{"en":"Syria","ar":"سوريا"}',
                'iso2' => 'SY',
                'iso3' => 'SYR',
                'country_numeric' => '760',
                'country_code' => '+963',
                'flag' => 'countries/flag_syria.png',
                'currency' => NULL,
                'currency_id' => 1,  // USD
                'language_id' => 2,  // Arabic
                'status' => 1,
                'created_by' => NULL,
                'updated_by' => NULL,
                'created_at' => now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ],
            [
                'id' => 3,
                'name' => '{"en":"Iraq","ar":"العراق"}',
                'iso2' => 'IQ',
                'iso3' => 'IRQ',
                'country_numeric' => '368',
                'country_code' => '+964',
                'flag' => 'countries/flag_iraq.png',
                'currency' => NULL,
                'currency_id' => 1,  // USD
                'language_id' => 1,  // English
                'status' => 1,
                'created_by' => NULL,
                'updated_by' => NULL,
                'created_at' => now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ],
        ];

        DB::table('countries')->insert($countries);
    }
}
