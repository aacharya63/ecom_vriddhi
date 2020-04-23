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

Route::match(['get','post'], '/admin', 'AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::group(['middleware'	=>	['auth']], function(){
	Route::match(['get','post'], '/admin/dashboard', 'AdminController@dashboard');
	Route::match(['get','post'], '/admin/addProduct', 'ProductController@add');
	Route::match(['get','post'], '/admin/viewProduct', 'ProductController@view');
	Route::match(['get','post'], '/admin/editProduct/{id}', 'ProductController@edit');
	Route::match(['get','post'], '/admin/deleteProduct/{id}', 'ProductController@delete');
	// product route ends here
	Route::match(['get','post'], '/admin/addCategory', 'CategoryController@create');
	Route::get('/admin/updateProductStatus', 'ProductController@ups');
});

Route::get('/logout', 'AdminController@logout');