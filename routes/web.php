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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/pages-sign-in','LoginController@login');
Route::post('/login','LoginController@ligin_func');
Route::get('/logout','LoginController@logout');
Route::group(['middleware' => ['Webpanel']], function () {
Route::get('/','LoginController@index');

Route::get('/edit/{id}','ProfileController@index');
Route::post('/edit/sub','ProfileController@editsub');

Route::get('/delete/{id}','ProfileController@delete');
});

