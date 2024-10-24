<?php

namespace App\Providers;

use App\Models\Language;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $setting = Setting::first();
        $languages = Language::where('status', 1)->get();
        View::share('setting', $setting);
        View::share('languages' ,$languages);
    }
}
