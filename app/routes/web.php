<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;

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
    Route::get('/login', 'LoginController@index')->name('login')->middleware('guest');
    Route::post('/login', 'LoginController@login')->name('login.post')->middleware('guest');
    Route::post('/logout', 'LoginController@logout')->name('logout')->middleware('auth');
    Route::get('/forgot-password', 'LoginController@request')->name('password.request')->middleware('guest');
    Route::post('/forgot-password', 'LoginController@email')->name('password.email')->middleware('guest');
    Route::get('/reset-password/{token}', 'LoginController@reset')->name('password.reset')->middleware('guest');
    Route::post('/reset-password', 'LoginController@update')->name('password.update')->middleware('guest');
    Route::get('/setting', 'LoginController@setting')->name('setting')->middleware('auth');
    Route::post('/setting', 'LoginController@changePassword')->name('setting.change')->middleware('auth');
});


Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['admin', 'auth']], function(){
    Route::get('/', 'HomeController@index')->name('admin.home');

    Route::group(['prefix' => 'data-user'], function(){
        Route::get('/', 'UserController@index')->name('admin.data-user');

        Route::get('/create', 'UserController@create')->name('admin.data-user.create');
        Route::post('/create', 'UserController@store')->name('admin.data-user.store');

        Route::post('/delete/{id}', 'UserController@destroy')->name('admin.data-user.delete');
    });
});

Route::group(['prefix' => 'user', 'namespace' => 'App\Http\Controllers\User', 'middleware' => ['user', 'auth']], function(){
    Route::get('/', 'HomeController@index')->name('user.home');

    Route::group(['prefix' => 'profile'], function(){
        Route::group(['prefix' => 'data-pribadi'], function(){
            Route::get('/', 'PersonalDataController@index')->name('user.personal-data');

            Route::get('/biodata', 'ProfileController@index')->name('user.profile');
            Route::post('/biodata', 'ProfileController@store')->name('user.profile.store');
            Route::post('/biodata.update', 'ProfileController@update')->name('user.profile.update');
            Route::post('/biodata.image', 'ProfileController@image')->name('user.profile.image');

            Route::get('/alamat-kontak', 'AddressContactController@index')->name('user.address-contact');
            Route::post('/alamat-kontak', 'AddressContactController@store')->name('user.address-contact.store');

            Route::get('/keluarga', 'FamilyController@index')->name('user.family');

            Route::get('/kependudukan', 'CitizenshipController@index')->name('user.citizenship');

            Route::get('/kepegawaian', 'StaffingController@index')->name('user.staffing');

            Route::get('/bidang-keilmuan', 'ScientificFieldController@index')->name('user.scientific-field');
            
            Route::get('/lain', 'OtherController@index')->name('user.other');
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
            Route::get('/detail', 'PenelitianController@detail')->name('user.penelitian.detail');

            Route::get('/create', 'PenelitianController@create')->name('user.penelitian.create');

            Route::get('/edit', 'PenelitianController@edit')->name('user.penelitian.edit');
        });
    });
});
