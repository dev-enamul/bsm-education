<?php

namespace App\Providers;

use App\Models\WebsiteData;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        Paginator::useBootstrap();  
        View::composer('*', function ($view) {
            // Share data with all views 
            $data = WebsiteData::get()->keyBy('id'); 
            $view->with('key', $data);
        });
    }
}
