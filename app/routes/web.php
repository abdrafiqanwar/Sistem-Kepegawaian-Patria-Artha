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

            Route::get('/edit', 'InpassingController@edit')->name('user.inpassing.edit');
            
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
            Route::get('/detail', 'KepangkatanController@detail')->name('user.kepangkatan.detail');

            Route::get('/create', 'KepangkatanController@create')->name('user.kepangkatan.create');

            Route::get('/edit', 'KepangkatanController@edit')->name('user.kepangkatan.edit');
        });
    });

    Route::group(['prefix' => 'kualifikasi', 'namespace' => 'Kualifikasi'], function(){
        Route::group(['prefix' => 'pendidikan-formal', 'namespace' => 'PendidikanFormal'], function(){
            Route::get('/', 'PendidikanFormalController@index')->name('user.pendidikan-formal');
            Route::get('/detail', 'PendidikanFormalController@detail')->name('user.pendidikan-formal.detail');

            Route::get('/create', 'PendidikanFormalController@create')->name('user.pendidikan-formal.create');

            Route::get('/edit', 'PendidikanFormalController@edit')->name('user.pendidikan-formal.edit');
        });
    });

    Route::group(['prefix' => 'kompetensi', 'namespace' => 'Kompetensi'], function(){
        Route::group(['prefix' => 'sertifikasi', 'namespace' => 'Sertifikasi'], function(){
            Route::get('/', 'SertifikasiController@index')->name('user.sertifikasi');
            Route::get('/detail-dosen', 'SertifikasiController@detailDosen')->name('user.sertifikasi.detailDosen');
            Route::get('/detail-profesi', 'SertifikasiController@detailProfesi')->name('user.sertifikasi.detailProfesi');

            Route::get('/create-dosen', 'SertifikasiController@createDosen')->name('user.sertifikasi.createDosen');
            Route::get('/create-profesi', 'SertifikasiController@createProfesi')->name('user.sertifikasi.createProfesi');

            Route::get('/edit-dosen', 'SertifikasiController@editDosen')->name('user.sertifikasi.editDosen');
            Route::get('/edit-profesi', 'SertifikasiController@editProfesi')->name('user.sertifikasi.editProfesi');
        });

        Route::group(['prefix' => 'tes', 'namespace' => 'Tes'], function(){
            Route::get('/', 'TesController@index')->name('user.tes');
            Route::get('/create', 'TesController@create')->name('user.tes.create');
        });
    });

    Route::group(['prefix' => 'penelitian', 'namespace' => 'Penelitian'], function(){
        Route::group(['prefix' => 'penelitian', 'namespace' => 'Penelitian'], function(){
            Route::get('/', 'PenelitianController@index')->name('user.penelitian');

            Route::get('/create', 'PenelitianController@create')->name('user.penelitian.create');
        });
    });
});
