<?php

namespace App\Providers;

use Faker\Factory;
use Faker\Generator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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

        View::addLocation(resource_path('admin/views'));
        View::addLocation(resource_path('client/views'));
        View::addLocation(resource_path('public/views'));

       // Model::shouldBeStrict(!$this->app->isProduction());

        //Vite::useAggressivePrefetching();

        //URL::forceHttps($this->app->isProduction());

    }
}
