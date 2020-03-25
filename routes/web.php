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

Route::get('/', function () {
    return view('index');
});

Route::resource('registros', 'RegistroController');

Auth::routes(['verify' => true]);


Route::get('/admin', 'HomeController@index');
Route::get('/home', 'HomeController@index')->middleware('verified');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/result', 'HomeController@result')->name('result');
Route::get('/alert', 'HomeController@alert')->name('alert');


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::post('check', 'HomeController@check')->name('check');
