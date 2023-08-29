<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application Services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application Services.
     */
    public function boot(): void
    {
        // Filament::serving(function () {
        //     // Using Vite
        //     Filament::registerViteTheme('resources/css/filament.css');
        // });
    }
}
