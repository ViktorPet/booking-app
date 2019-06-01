<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
use Laravel\Dusk\DuskServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.*', function ($view) {
            $view->with('placeholder', asset('images/placeholder.jpg'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(\App\Booking\Interfaces\FrontendRepositoryInterface::class,function()
        {
            return new \App\Booking\Repositories\FrontendRepository;
        });


            $this->app->register(DuskServiceProvider::class);

    }
}
