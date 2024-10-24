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
            Route::get('/help', [HomepageController::class, 'help'])->name('help');
            Route::get('/pages/{slug}', [HomepageController::class , 'page'])->name('page.show');
            Route::post('/contact-us/store', [HomepageController::class, 'store_contact'])->name('contacts');
            Route::get('/faq', [HomepageController::class, 'faq'])->name('faq');
            Route::get('/templates', [HomepageController::class, 'getTemplates'])->name('templates');
            Route::get('/pricing', [HomepageController::class, 'pricing'])->name('pricing');
            Route::get('/countries', [HomepageController::class, 'countries'])->name('countries');

            Route::get('/create-store', function () {
                return view('main.pages.create-store');
            })->name('create-store');


        });
});
