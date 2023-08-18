<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Country
        $this->app->bind(\App\Contracts\Repositories\CountryRepository::class, \App\Services\Repositories\CountryRepositoryEloquent::class);

        // Currency
        $this->app->bind(\App\Contracts\Repositories\CurrencyRepository::class, \App\Services\Repositories\CurrencyRepositoryEloquent::class);
    }
}
