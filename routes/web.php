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
// Route::get('dashboard-page', function () {
//     return view('dashboard');
// });
Route::get('promo', function () {
    return view('promo');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
<<<<<<< HEAD
=======

Route::get('login-page', function () {
    return view('login');
});

Route::get('home', function () {
    return view('home');
});

>>>>>>> 8c738228d05785868ed8e26b3a4f127efb297a09
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HouseController@index')->name('dashboard.index');
Route::get('/house/{id}', 'RoomController@index');

Route::post('/login/admin', 'Auth\LoginController@adminlogin');
Route::get('/login/admin', 'Auth\LoginController@adminloginform');