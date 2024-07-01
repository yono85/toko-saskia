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

// Route::get('/', function(){
//     dd("oke yes");
// });

// front
Route::group(['prefix' => '/', 'middleware' => 'CheckLogoutFront'], function() use ($root){

    Route::get('/', $root . '\front\index@main');

});


// access users
Route::group(['prefix' => '/', 'middleware' => 'CheckLogin'], function() use ($root){
    Route::get('/login', $root . '\access\index@login');
    Route::get('/signup', $root . '\access\index@signup');
});


Route::group(['prefix' => '/admin', 'middleware' => 'CheckLogoutAdmin'], function() use ($root){
// Route::group(['prefix' => '/admin'], function() use ($root){
    Route::get('/', $root . '\access\index@loginadmin');

    //
    Route::get('/home', $root . '\admin\index@main');
    // Route::get('/login', $root . '\access\index@login');
});


// Route::get('/', function () {
    
//     dd("oke");
//     // Route::get('/login', function(){
//     //     return "login";
//     // });
//     // return view('welcome');
// });


// Route::group(['prefix' => '/admin'], function() ue ($root)
// {
//     Route::get('/login', $root . '\access\manage@login');
    
// });



Route::group(['prefix' => '/api'], function() use ($root)
{
    Route::get('/login', $root . '\access\manage@login');
    Route::get('/signup', $root . '\access\manage@signup');
    Route::get('/logout', $root . '\access\manage@logout');

});


