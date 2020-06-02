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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'UserController@show');
// Route::get('/home', 'ProprieteController@proprietes_user')->name('proprietes_user');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', function(){
//     return view('home', compact('user'));
// });
Route::resource('proprietes_user', 'ProprietesUserController');
Route::resource('proprietes', 'ProprieteController');
Route::resource('offre', 'OffreController');
Route::resource('user', 'UserController');
Route::get('/user', 'HomeController@index')->name('user');

