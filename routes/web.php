<?php

use Illuminate\Support\Facades\Route;
$root = '\App\Http\Controllers';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// FRONT
Route::group(['prefix' => '/', 'middleware' => 'CheckLogoutFront'], function() use ($root){

    Route::get('/', $root . '\front\index@main');
    Route::get('/product', $root . '\front\product\index@list');
    Route::get('/product/{any}', $root . '\front\product\index@detail');

    // ORDERS
    Route::get('/cart', $root . '\orders\index@cart');
    Route::get('/checkout', $root . '\orders\index@checkout');
    Route::get('/checkout/success', $root . '\orders\index@success');
});


// HOME USERS
Route::group(['prefix' => '/home', 'middleware' => 'CheckLogout'], function() use ($root){

    // HOME
    Route::get('/', $root . '\home\index@main');
    Route::get('/orders', $root . '\home\index@orders');
    Route::get('/account', $root . '\home\index@account');
});

// access users
Route::group(['prefix' => '/', 'middleware' => 'CheckLogin'], function() use ($root){
    Route::get('/login', $root . '\access\index@login');
    Route::get('/signup', $root . '\access\index@signup');

    Route::get('/admin', $root . '\access\index@loginadmin');
});


Route::group(['prefix' => '/admin', 'middleware' => 'CheckLogoutAdmin'], function() use ($root){
// Route::group(['prefix' => '/admin'], function() use ($root){

    //
    Route::get('/home', $root . '\admin\index@main');
    Route::get('/home/orders', $root . '\admin\index@orders');
    // Route::get('/login', $root . '\access\index@login');

    Route::get('/home/product', $root . '\product\index@productPage');

});



Route::group(['prefix' => '/api'], function() use ($root)
{
    Route::post('/login', $root . '\access\manage@login');
    Route::post('/signup', $root . '\access\manage@signup');
    Route::get('/logout', $root . '\access\manage@logout');

    //ORDERS
    Route::post('/checkout/create', $root . '\orders\manage@main');
    Route::post('/checkout/send', $root . '\orders\manage@sendCheckout');
    Route::post('/checkout/confrm', $root . '\orders\manage@confrmCheckout');
    Route::post('/checkout/upload', $root . '\orders\manage@upload');


    // HOME ORDERS
    Route::get('/orders/table', $root . '\orders\table@main');
    Route::get('/orders/view', $root . '\orders\index@view');
    Route::post('/orders/payment/verification', $root . '\orders\manage@verification');

    // PRODUCT
    Route::get('/product/table', $root . '\product\table@main');
    Route::get('/product/view', $root . '\product\index@view');
    Route::post('/product/create', $root . '\product\manage@main');
    

    // DASHBOARD
    Route::get('/dashboard/report', $root . '\dashboard\report@main');

});


