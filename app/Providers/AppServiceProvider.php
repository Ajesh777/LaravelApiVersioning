<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// 2.1: Import Schema from Facades
use Illuminate\Support\Facades\Schema;
// 9.1: Import Json provider
//use Illuminate\Http\Resources\Json\Resource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 2.2: Change String Default length = 191
        Schema::defaultStringLength(191);
        // 9.2: Json without any extra data wrapping:
        //Resource::withoutWrapping();
    }
}
