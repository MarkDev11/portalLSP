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
        // Share settings and kontak with all views (safe against DB failures)
        View::composer('*', function ($view) {
            try {
                $setting = Setting::getSettings();
            } catch (\Throwable $e) {
                $setting = null;
            }
            try {
                $kontak = Kontak::first();
            } catch (\Throwable $e) {
                $kontak = null;
            }
            $view->with('setting', $setting);
            $view->with('kontak', $kontak);
        });
    }
}
