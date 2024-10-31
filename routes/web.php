<?php

use App\Http\Controllers\web\HomepageController;
use App\Http\Controllers\web\StoreController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::name('main.')
        ->group(function () {

            Route::get('/', [HomepageController::class, 'index'])->name('home');
            Route::get('/help', [HomepageController::class, 'help'])->name('help');
            Route::get('/pages/privacy', [HomepageController::class , 'privacyPage'])->name('page.show.privacy-policy');
            Route::get('/pages/terms', [HomepageController::class , 'termsPage'])->name('page.show.terms');
            Route::post('/contact-us/store', [HomepageController::class, 'store_contact'])->name('contacts');
            Route::get('/faq', [HomepageController::class, 'faq'])->name('faq');
            Route::get('/templates', [HomepageController::class, 'getTemplates'])->name('templates');
            Route::get('/pricing', [HomepageController::class, 'pricing'])->name('pricing');
            Route::get('/countries', [HomepageController::class, 'countries'])->name('countries');
            Route::get('/get-cities-by-country/{countryId}', [StoreController::class, 'getCitiesByCountry']);

            Route::prefix('create-store')->group(function () {
                // First step routes
                Route::get('first-step', [StoreController::class, 'showStep1'])->name('create-store');
                Route::post('first-step', [StoreController::class, 'firstStep'])->name('post-create-store-1');

                // Second step routes
                Route::get('second-step', [StoreController::class, 'showStep2'])->name('create-store-2');
                Route::post('second-step', [StoreController::class, 'secondStep'])->name('post-create-store-2');

                // Third step routes
                Route::get('third-step', [StoreController::class, 'showStep3'])->name('create-store-3');
                Route::post('third-step', [StoreController::class, 'thirdStep'])->name('post-create-store-3');

                // Fourth step (final) routes
                Route::get('fourth-step', [StoreController::class, 'showStep4'])->name('create-store-4');
                Route::post('fourth-step', [StoreController::class, 'fourthStep'])->name('post-create-store-4');
            });

        });
});
