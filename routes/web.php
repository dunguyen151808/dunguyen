<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
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
    return view('admin.pages.index');
});





Route::group(['prefix' => 'admin'],function(){
	Route::view('/','admin.pages.index');
    Route::resource('category','CategoryController'); 
    Route::resource('producttype','ProductTypeController');
	Route::resource('product','ProductController');
	Route::post('updatePro/{id}','ProductController@update');

});



