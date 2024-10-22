<?php

use App\Http\Controllers\web\HomepageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::name('main.')
        ->group(function () {

            Route::get('/', [HomepageController::class, 'index'])->name('home');
            Route::get('/setting-store-info/{id}', [HomepageController::class, 'setting_store_info'])->name('setting_store_info');
            Route::get('/pages/{slug}', [HomepageController::class , 'page'])->name('page.show');
            Route::get('/page/privacy-policy', [HomepageController::class , 'privacy_page'])->name('page.privacy');
            Route::post('/contact-us/store', [HomepageController::class, 'store_contact'])->name('contacts');
            Route::get('/contact-us', [HomepageController::class, 'contact']);
            Route::get('/help', [HomepageController::class, 'help'])->name('help');
            Route::get('/faq', [HomepageController::class, 'faq'])->name('faq');
            Route::get('/templates', [HomepageController::class, 'getTemplates'])->name('templates');
            Route::get('/pricing', [HomepageController::class, 'pricing'])->name('pricing');
            Route::get('/countries', [HomepageController::class, 'countries'])->name('countries');
            Route::get('/languages', [HomepageController::class, 'getLanguages'])->name('languages');

            Route::get('/create-store', function () {
                return view('main.create-store');
            })->name('create-store');


        });
});
