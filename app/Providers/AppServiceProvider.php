<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ImageService;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\View;
use App\Models\Categories;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLength(191);
        $categories = Categories::all();
        $product = Product::All()->take(8);
        //Lay tat ca categories cha
        //$categories = Category::where('parent_id', 0)->get();
        View::share('category', $categories);
        View::share('product', $product);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\ImageService',function($app){
            return new ImageService();
        });
    }
}
