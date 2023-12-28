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

        Route::group(['prefix' => 'data-pribadi', 'namespace' => 'DataPribadi'], function(){
            Route::get('/', 'DataPribadiController@index')->name('user.data-pribadi');

            Route::get('/biodata', 'BiodataController@index')->name('user.biodata');

            Route::get('/alamat-kontak', 'AlamatController@index')->name('user.alamat-kontak');

            Route::get('/keluarga', 'KeluargaController@index')->name('user.keluarga');

            Route::get('/kependudukan', 'KependudukanController@index')->name('user.kependudukan');

            Route::get('/kepegawaian', 'KepegawaianController@index')->name('user.kepegawaian');

            Route::get('/bidang-keilmuan', 'KeilmuanController@index')->name('user.bidang-keilmuan');
            
            Route::get('/lain', 'LainController@index')->name('user.lain');
        });

        Route::group(['prefix' => 'inpassing', 'namespace' => 'Inpassing'], function(){
            Route::get('/', 'InpassingController@index')->name('user.inpassing');
            Route::get('/detail', 'InpassingController@detail')->name('user.inpassing.detail');
            
            Route::get('/create', 'InpassingController@create')->name('user.inpassing.create');
        });

        Route::group(['prefix' => 'jabatan-fungsional', 'namespace' => 'JabatanFungsional'], function(){
            Route::get('/', 'JabatanFungsionalController@index')->name('user.jabatan-fungsional');
            Route::get('/detail', 'JabatanFungsionalController@detail')->name('user.jabatan-fungsional.detail');

            Route::get('/create', 'JabatanFungsionalController@create')->name('user.jabatan-fungsional.create');

            Route::get('/edit', 'JabatanFungsionalController@edit')->name('user.jabatan-fungsional.edit');
        });

        Route::group(['prefix' => 'kepangkatan', 'namespace' => 'Kepangkatan'], function(){
            Route::get('/', 'KepangkatanController@index')->name('user.kepangkatan');
        });
    });
});
