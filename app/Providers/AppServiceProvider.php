<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use Cart;

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
        // $products = Product::all();
        // $data['products'] = Cart::getContent();
        // View::share('products');
        // View::composer(['header','cart','home'],function ($view) {
            // $products = Product::all();
            // $data['products'] = Cart::getContent();
            // $count = 0;
            // $items = Cart::getContent();
            // $total = Cart::getTotal();
            // $view->with('products');
            // View::share('items',$items);
            // View::share('total',$total);
            // View::share('count',$count);
            $categories = Category::all();
            $products = Product::all();
            View::share('products',$products);
            View::share('categories',$categories);
            // $data['items'] = Cart::getContent();
        // });

    }
}
