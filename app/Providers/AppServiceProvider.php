<?php

namespace App\Providers;

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
    public function boot()
    {
        // DB::listen(function ($query) {
        //     var_dump($query->sql);
        //     var_dump($query->binding ?? 'no binding');
        //     var_dump($query->time);
        // });
    }
}
