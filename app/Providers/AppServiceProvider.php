<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

if (php_sapi_name() != 'cli') {
    if ($GLOBALS['CURRENT_URL'] == '/lifecycle') {
        dump('5. Register Service Provider');
    }
}

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
        if (php_sapi_name() != 'cli') {
            if ($GLOBALS['CURRENT_URL'] == '/lifecycle') {
                dump('6. Boot Service Provider');
            }
        }
    }
}
