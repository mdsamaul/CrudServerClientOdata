<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Flat3\Lodata\Facades\Lodata;
use App\Models\Person;

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
      Lodata::discover(Person::class);
    }
}
