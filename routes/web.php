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

Auth::routes();
Route::get('admin/profile', ['middleware' => 'admin', function () {     
	
}]);

	Route::get('/edit/{id}', 'HomeController@editUser');
	Route::post('/save-edit', 'HomeController@saveEdit');


Route::get('/home', 'HomeController@index');
Route::get('image-upload','ImageController@imageUpload');
Route::post('image-upload','ImageController@imageUploadPost');


