<?php

namespace Database\Seeders;

use Database\Seeders\Tenants\BannersSeeder;
use Database\Seeders\Tenants\CartSeeder;
use Database\Seeders\Tenants\CategoryProductSeeder;
use Database\Seeders\Tenants\CategorySeeder;
use Database\Seeders\Tenants\ContactSeeder;
use Database\Seeders\Tenants\CouponItemSeeder;
use Database\Seeders\Tenants\CouponOrderHistoriesSeeder;
use Database\Seeders\Tenants\CouponSeeder;
use Database\Seeders\Tenants\CustomerAddressSeeder;
use Database\Seeders\Tenants\FaqSeeder;
use Database\Seeders\Tenants\FavoritesSeeder;
use Database\Seeders\Tenants\ManufacturerSeeder;
use Database\Seeders\Tenants\MediaSeeder;
use Database\Seeders\Tenants\MenuSeeder;
use Database\Seeders\Tenants\OptionCatalogSeeder;
use Database\Seeders\Tenants\OptionDetailsSeeder;
use Database\Seeders\Tenants\OptionSeeder;
use Database\Seeders\Tenants\OrderItemsSeeder;
use Database\Seeders\Tenants\OrderOptionsSeeder;
use Database\Seeders\Tenants\OrdersSeeder;
use Database\Seeders\Tenants\PageSeeder;
use Database\Seeders\Tenants\PaymentHistoriesSeeder;
use Database\Seeders\Tenants\ProductBulkDiscountsSeeder;
use Database\Seeders\Tenants\ProductOptionsSeeder;
use Database\Seeders\Tenants\ProductOptionValuesSeeder;
use Database\Seeders\Tenants\ProductPicturesSeeder;
use Database\Seeders\Tenants\ProductRatingSeeder;
use Database\Seeders\Tenants\ProductRelatedSeeder;
use Database\Seeders\Tenants\ProductsSeeder;
use Database\Seeders\Tenants\ProductVariationsSeeder;
use Database\Seeders\Tenants\ProductVariationValuesSeeder;
use Database\Seeders\Tenants\SliderSeeder;
use Database\Seeders\Tenants\TicketConversationsSeeder;
use Database\Seeders\Tenants\TicketSeeder;
use Database\Seeders\Tenants\UserNotificationSeeder;
use Database\Seeders\Tenants\UserSeeder;
use Database\Seeders\Tenants\VendorNotificationSeeder;
use Illuminate\Database\Seeder;

class MockStoreDataSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ManufacturerSeeder::class,
            OptionCatalogSeeder::class,
            OptionSeeder::class,
            OptionDetailsSeeder::class,
            ProductsSeeder::class,
            ProductOptionsSeeder::class,
            ProductPicturesSeeder::class,
            ProductBulkDiscountsSeeder::class,
            ProductRelatedSeeder::class,
            CouponSeeder::class,
            CouponItemSeeder::class,
            PageSeeder::class,
            ContactSeeder::class,
            FaqSeeder::class,
            SliderSeeder::class,
            MenuSeeder::class,
            ProductRatingSeeder::class,
            CustomerAddressSeeder::class,
            CartSeeder::class,
            CategoryProductSeeder::class,
            BannersSeeder::class,
            TicketSeeder::class,
            TicketConversationsSeeder::class,
            ProductOptionValuesSeeder::class,
            ProductVariationValuesSeeder::class,
            ProductVariationsSeeder::class,
            OrdersSeeder::class,
            OrderItemsSeeder::class,
            CouponOrderHistoriesSeeder::class,
            OrderOptionsSeeder::class,
            MediaSeeder::class,
            FavoritesSeeder::class,
            UserNotificationSeeder::class,
            VendorNotificationSeeder::class,
            PaymentHistoriesSeeder::class,
            //VendorPermissionsSeeder::class,
            //AssignVendorPermissionSeeder::class,
            ]);
    }
}
