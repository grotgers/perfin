<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use FreeCurrencyApi\FreeCurrencyApi\FreeCurrencyApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(FreeCurrencyApiClient::class, function () {
            return new FreeCurrencyApiClient('OMiXpCR00EgHLs4pvg9iQDZucbh0RX7Uq0XAwOoq');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
