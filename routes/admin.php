<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');

Route::middleware('admin')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('admin.master');
    Route::group([
        'namespace' => 'Admin', //controller
        'prefix' => 'category', //url
        'as' => 'admin.category.' //name
    ], function() {
        Route::get('all', 'CategoryController@all')->name('all');
        Route::get('create', 'CategoryController@create')->name('create');
        Route::post('store', 'CategoryController@store')->name('store');
        Route::get('index', 'CategoryController@index')->name('index');
        Route::get('{category}/edit', 'CategoryController@edit')->name('edit');
        Route::put('{category}', 'CategoryController@update')->name('update');
        Route::delete('delete/{category}', 'CategoryController@destroy')->name('destroy');
    });


    Route::group([
        'namespace' => 'Admin',
        'prefix' => 'product',
        'as' => 'admin.product.'
    ], function() {
        Route::get('all', 'ProductController@all')->name('all');
        Route::get('create', 'ProductController@create')->name('create');
        Route::post('store', 'ProductController@store')->name('store');
        Route::get('index', 'ProductController@index')->name('index');
        Route::get('{product}/edit', 'ProductController@edit')->name('edit');
        Route::put('{product}', 'ProductController@update')->name('update');
        Route::delete('delete/{product}', 'ProductController@destroy')->name('destroy');
    });
    Route::post('/logout', 'Admin\Auth\LogoutController@logout')->name('admin.logout');
});
