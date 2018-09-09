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
    return view('indice');
})->name('indice');

Route::get('/log', function(){
    return view('login');
})->name('log');

Route::get('/file', function () {
    return view('file');
});

Route::get('/forum', function(){
    return view('forum.forum');
})->name('forum');

Route::get('/forum/new_entry', function(){
    return view('forum.newentry');
})->name('forum.newentry')->middleware('user');

Route::post('/log/save', 'LoginController@store')->name('user.registrar');
Route::post('/log/verify', 'LoginController@authenticate')->name('user.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
