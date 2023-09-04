<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/main', 'HomeController@main')->name('admin.main');


Route::get('/main',function(){

    return view('main');
})->name('admin.main');



Route::group([
    'namespace' => 'Front',    //controller
    // 'prefix' => 'category',    //url
    // 'as' => 'category.'           //name
], function() {
    Route::get('/','HomeController@getHome')->name('front.home');
    Route::get('/search','HomeController@getSearch');
    Route::get('/wishlist','HomeController@getWishList')->name('wishlist');
    Route::get('/detail/{product}/{slug}.html','HomeController@getDetail');
    Route::get('/category/{category}/{slug}.html','HomeController@getCategory');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/about', 'HomeController@about')->name('about');

});
Route::post('/cart/add/{id}', 'CartController@getAddCart')->name('addcart');
Route::get('/cart/show', 'CartController@getShowCart')->name('showcart');
Route::put('/cart/update','CartController@getUpdateCart')->name('updatecart'); // cach khai bao class nay cu r, sau nen thay lai theo cach moi
Route::get('/cart/delete/{id}','CartController@getDeleteCart')->name('deletecart');
Route::get('/cart/delete','CartController@getDeleteAll')->name('deleteall');
Route::get('checkout','CartController@checkout')->name('checkout')->middleware('auth');

Route::post('/vnpay-payment','CheckoutController@vnpaypayment')->name('vnpaypayment');
Route::get('complete', 'CartController@getComplete')->name('complete');
Route::post('/cart/send', 'CartController@postComplete')->name('post.complete');


Route::resource('users','UsersController')->middleware('auth');
Route::group([
    'namespace' => 'Front',
    'prefix' => 'product',
    'as' => 'product.'
], function() {
    Route::get('all', 'HomeController@all')->name('all')->middleware('auth');
    // Route::get('create', 'ProductController@create')->name('create');
    // Route::post('store', 'ProductController@store')->name('store');
    // Route::get('index', 'ProductController@index')->name('index');
    // Route::get('{product}/edit', 'ProductController@edit')->name('edit');
    // Route::put('{product}', 'ProductController@update')->name('update');
    // Route::delete('delete/{product}', 'ProductController@destroy')->name('destroy');
});








Route::get('dang-ky', 'AuthController@getRegister')->name('get.register');
Route::post('dang-ky', 'AuthController@postRegister')->name('post.register');
Route::get('/user/verify/{token}','AuthController@verifyEmail')->middleware('auth')->name('verify');
Route::get('dang-nhap', 'AuthController@getLogin')->name('get.login');
Route::post('dang-nhap', 'AuthController@postLogin')->name('post.login');




Route::middleware(['auth','is_user_verify_email'])->group(function()
{
    // Route::get('/', 'HomeController@home');
    Route::post('/comment/{id}', 'Front\HomeController@postComment')->name('post.comment');
    Route::post('/dang-xuat', 'AuthController@logout')->name('logout');



    // Route::group([
    //     'namespace' => 'Admin', //controller
    //     'prefix' => 'category', //url
    //     'as' => 'category.' //name
    // ], function() {
    //     Route::get('all', 'CategoryController@all')->name('all');
    //     Route::get('create', 'CategoryController@create')->name('create');
    //     Route::post('store', 'CategoryController@store')->name('store');
    //     Route::get('index', 'CategoryController@index')->name('index');
    //     Route::get('{category}/edit', 'CategoryController@edit')->name('edit');
    //     Route::put('{category}', 'CategoryController@update')->name('update');
    //     Route::delete('delete/{category}', 'CategoryController@destroy')->name('destroy');
    // });



    // Route::resource('product', 'ProductController');



    // Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
    // Route::put('users/{user}', 'UsersController@update')->name('users.update');

    // Route::get('/email/verify', function () {
    //     return view('auth.verify-email');\
    // })->middleware('auth')->name('verification.notice');



    // Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    //     $request->fulfill();

    //     return redirect('/home');
    // })->middleware(['auth', 'signed'])->name('verification.verify');



    // Route::post('/email/verification-notification', function (Request $request) {
    //     $request->user()->sendEmailVerificationNotification();

    //     return back()->with('message', 'Verification link sent!');
    // })->middleware(['auth', 'throttle:6,1'])->name('verification.send');





});

// Auth::routes(['verify' => true]);


