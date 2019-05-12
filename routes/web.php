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

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/index', 'FrontendController@index');*/

//Route::get('/hotels', 'FrontendContoller@show);





Route::get('/hotel-details', function (){

    return view('frontend/hotel-details');
});

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


//Route::get('/hotels', 'FrontendController@show ');

/*Route::get('/hotels', function (){

    return view('frontend/hotels');
});*/


Route::get('/hotels','FrontendController@show' );


