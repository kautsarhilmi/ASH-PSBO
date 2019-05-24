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

Route::get('login-page', function () {
    return view('login');
});

Route::get('home', function () {
    return view('home');
});

Auth::routes();

Route::prefix('admin')->group(function() {
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@redirectToFurniture')->name('admin');
    Route::get('/furniture', 'FurnitureController@adminIndex')->name('admin.furniture');
    Route::post('/furniture/create-new-furniture', 'FurnitureController@store')->name('admin.furniture.store');
    Route::post('/tag/create-new-tag', 'TagController@store')->name('admin.tag.store');
    Route::get('/order', 'OrderController@adminIndex')->name('admin.order');
    Route::get('/tag', 'TagController@adminIndex')->name('admin.tag');
});

Route::get('/', 'HomeController@index')->name('home');
Route::post('/dashboard/store-new-house', 'HouseController@store')->name('house.store');
Route::post('/dashboard/store-new-room', 'RoomController@store')->name('room.store');
Route::get('/dashboard', 'HouseController@index')->name('dashboard.index');
Route::get('/house/{id}', 'RoomController@index');
