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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::match(['get','post'], '/', 'IndexController@index');
Route::match(['get','post'], '/about', 'IndexController@about');
Route::match(['get','post'], '/freeBuyersGuide', 'IndexController@fbg');
Route::match(['get','post'], '/onlineStore', 'IndexController@onlineStore');
Route::match(['get','post'], '/radioHire', 'IndexController@rh');
Route::match(['get','post'], '/latestNews', 'IndexController@ln');
Route::match(['get','post'], '/findRadioBy', 'IndexController@frb');
Route::match(['get','post'], '/contact', 'IndexController@contact');
Route::match(['get','post'], '/userContact', 'IndexController@userContact');
Route::match(['get','post'], '/admin', 'AdminController@login');
// user login and registration route
Route::match(['get'], '/login-register', 'FrontUserController@lr_front');
Route::match(['post'], '/userRegister', 'FrontUserController@ur');
Auth::routes();

Route::get('/home', 'HomeController@index');



Route::group(['middleware'	=>	['auth']], function(){
	Route::match(['get','post'], '/admin/dashboard', 'AdminController@dashboard');
	Route::match(['get','post'], '/admin/addProduct', 'ProductController@add');
	Route::match(['get','post'], '/admin/addImages/{id}', 'ProductController@addImg');
	Route::match(['get'], '/admin/delImages/{id}', 'ProductController@delImg');
	Route::match(['get','post'], '/admin/viewProduct', 'ProductController@view');
	Route::match(['get','post'], '/admin/editProduct/{id}', 'ProductController@edit');
	Route::match(['get','post'], '/admin/deleteProduct/{id}', 'ProductController@delete');
	Route::get('/admin/updateProductStatus', 'ProductController@ups');
	// product route ends here
	Route::match(['get','post'], '/admin/addCategory', 'CategoryController@create');
	Route::match(['get','post'], '/admin/viewCategory', 'CategoryController@view');
	Route::match(['get','post'], '/admin/editCategory/{id}', 'CategoryController@edit');
	Route::match(['get','post'], '/admin/deleteCategory/{id}', 'CategoryController@destroy');
	Route::get('/admin/updateCategoryStatus', 'CategoryController@ucs');
	// category route ends here
	Route::match(['get','post'], '/admin/banner', 'BannerController@addBanner');
	Route::match(['get','post'], '/admin/addBanner', 'BannerController@create');
	Route::match(['get','post'], '/admin/editBanner/{id}', 'BannerController@edit');
	Route::match(['get','post'], '/admin/deleteBanner/{id}', 'BannerController@delete');
	Route::get('/admin/updateBannerStatus', 'BannerController@ubs');
	// banner route ends here
	Route::match(['get','post'], '/admin/addAttribute/{id}', 'ProductController@addAttribute');
	Route::match(['get','post'], '/admin/deleteAttribute/{id}', 'ProductController@deleteAttribute');
	Route::match(['get','post'], '/admin/editAttribute/{id}', 'ProductController@editAttribute');

});

Route::get('/logout', 'AdminController@logout');