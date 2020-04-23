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
    return view('public_views.index');
});

Route::get('log', function() {
    return view('public_views.index');
});
Route::get('/album', 'HomeController@album');
Route::get('/artist', 'HomeController@artist');
Route::get('/genres', 'HomeController@genres');
Route::get('/top_track', 'HomeController@top_track');
Route::get('/free_music', 'HomeController@free_music');
Route::get('/stations', 'HomeController@stations');
Route::get('/download', 'HomeController@download');
Route::get('/purchase', 'HomeController@purchase');
Route::get('/favourite', 'HomeController@favourite');
Route::get('/history', 'HomeController@history');
Route::get('/feature_playlist', 'HomeController@feature_playlist');
Route::get('/add_playlist', 'HomeController@add_playlist');

Auth::routes();

Route::get('dologout', 'HomeController@doLogout');
Route::post('/signup','HomeController@signup');
Route::get('/dashboard', 'DashboardController@dashboard');
Route::post('adminreg','HomeController@adminreg');
Route::post('/artistreg','HomeController@artistreg');

Route::resource('albums','AlbumController');
Route::resource('upload','UploadController');