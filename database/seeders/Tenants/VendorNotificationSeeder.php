<?php

namespace Database\Seeders\Tenants;

use App\Models\Vendor;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $vendorIds = DB::connection('mysql')->table('vendors')->pluck('id')->toArray();

        $notifications = [];

        foreach (range(1, 50) as $index) {
            $title = $faker->sentence();
            $message = $faker->paragraph();

            $notifications[] = [
                'vendor_id' => $faker->randomElement($vendorIds),
                'data' => json_encode(['title' => $title, 'message' => $message]),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        try {
            DB::table('vendor_notifications')->insert($notifications);
        } catch (\Exception $e) {
            $this->command->error($e->getMessage());
        }
    }
}