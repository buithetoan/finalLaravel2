<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Brand\BrandInterface;
use App\Repositories\Brand\BrandRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton(
        //     BrandInterface::class,
        //     BrandRepository::class
        // );
        // $this->app->bind("BrandInterface", "BrandRepository");

        // Dang ky cac Repository va Interfaces
        $this->app->bind(
            // Interface truoc
            BrandInterface::class,
            BrandRepository::class
        ); 
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
