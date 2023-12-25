<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Auth'], function(){
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@login')->name('login.post');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['prefix' => 'user', 'namespace' => 'App\Http\Controllers\User'], function(){
    Route::get('/', 'HomeController@index')->name('user.home');

    Route::group(['prefix' => 'profile', 'namespace' => 'Profile'], function(){
        // Route::get('data-pribadi', 'ProfileController@index')->name('user.profile.data-pribadi');
        Route::group(['prefix' => 'data-pribadi'], function(){
            Route::get('/', 'ProfileController@index')->name('user.data-pribadi');
            Route::get('/bidang-keilmuan', 'ProfileController@bidangKeilmuan')->name('user.bidang-keilmuan');
            Route::get('/alamat-kontak', 'ProfileController@alamatKontak')->name('user.alamat-kontak');
        });
    });
});
