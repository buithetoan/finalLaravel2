<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/AllProductPage', 'HomeController@AllProductPage')->name('AllProductPage');

// Route::match(['get','post'],'/home','HomeController@index');

Route::resource('admin/brand', 'Admin\BrandController');
// Route toi form admin login tam thoi -- sau nay chu y fix
Route::view('/adminlogin', function(){
	return view('admin.auth.login');
});
