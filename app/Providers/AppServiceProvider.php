<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\Kontak;

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
        // Share settings and kontak with all views
        View::composer('*', function ($view) {
            $setting = Setting::getSettings();
            $kontak = Kontak::first();
            $view->with('setting', $setting);
            $view->with('kontak', $kontak);
        });
    }
}
