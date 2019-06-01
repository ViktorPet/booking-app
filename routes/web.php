<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','FrontendController@home')->name('home');


/*Route::get('/hotels', function (){

    return view('frontend.hotels');
});*/



Route::get('/hotels', 'FrontendController@show')->name('hotels');


Route::get('/hotel/{id}','FrontendController@hotel')->name('hotel');

Route::get('/room/{id}','FrontendController@room')->name('room');




Route::get('/hotel-reservation', function (){

    return view('frontend/hotel-reservation');
});

Route::get('/user/dashboard', function (){

    return view('frontend/user/dashboard');
});

Route::get('/user/myfavorites', function (){

    return view('frontend/user/myfavorites');
});

Route::get('/mainadmin', function (){

    return view('admin/index');
});

Route::get('/myfavorites', function (){

    return view('frontend/user/myfavorites');
});

Route::get('/myitems', function (){

    return view('frontend/user/myitems');
});


Route::get('/myprofile', function (){

    return view('frontend/user/myprofile');
});









Route::get('/cache', function () {
    return Cache::get('key');
});


