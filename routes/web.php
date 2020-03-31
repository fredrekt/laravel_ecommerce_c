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
//layout 
Route::get('layout', function(){
    return view('layout');
});
// Route::get('login-new', function(){
//     return view('pages.login');
// });
// Route::get('register-new', function(){
//     return view('pages.register');
// });
//account
Route::get('/account/{id}', 'AccountController@index');
//edit account
Route::get('edit/account', 'AccountController@edit')->name('user.edit');
//update account
Route::post('edit/account', 'AccountController@update')->name('user.update');
//delete account
Route::get('delete/account', 'AccountController@delete')->name('user.delete');
//shop 
Route::get('shop', 'ShopController@index');
//car per apge
Route::get('/view/{car}/item','ShopController@viewCar');
//adding item/product to cart
Route::post('addtocart', 'ShopController@addToCart')->name('user.addtocart');
//cart
Route::get('/cart/{id}', 'CartController@index');

//Login Authentication Routes
Auth::routes();
//Sample route after logging in
Route::get('/home', 'HomeController@index')->name('home');
