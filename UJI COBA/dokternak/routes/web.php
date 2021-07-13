<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//route tamu
Route::get('/', 'WelcomeController@index');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard')->middleware('is_admin');
Route::get('lppetugas', [App\Http\Controllers\HomeController::class, 'lppetugas'])->name('lppetugas')->middleware('is_admin');
// Route::get('home', [HomeController::class, 'index'])->name('home');
Auth::routes();

// Route untuk Backend ----------------------------------------------------
Route::resource('admin', 'backend\AdminController');
Route::group(['namespace' => 'backend'], function()
{
    Route::resource('/dashboard/peternak', 'PeternakController');
    Route::resource('/dashboard/admin', 'AdminController');
    Route::resource('/dashboard/dtdokter', 'DataDokterController');
    Route::resource('/dashboard/data_tutorial', 'DataTutorialController');
    Route::resource('/dashboard/data_artikel', 'DataArtikelController');
    Route::resource('/dashboard/data_puskeswan', 'DataPuskeswanController');
    Route::resource('/dashboard/datapetugas', 'DataPetugasController');
    Route::resource('/dashboard/data_ks', 'DataKritikdanSaranController');
    Route::resource('/dashboard/dokumentasi', 'DokumentasiController');
    Route::resource('/dashboard/data_banner', 'DataBannerController');
});
// ------------------------------------------------------------------------

// Route untuk Petugas ----------------------------------------------------
Route::group(['namespace' => 'Petugas'], function()
{
    Route::resource('petugas/artikel', 'ArtikelController');
    Route::resource('petugas/home', 'HomeController');
    Route::resource('petugas/detailartikel', 'DetailArtikelController');
    Route::resource('petugas/tutorial', 'TutorialController');
    Route::resource('petugas/tulisartikel', 'TulisArtikelController');
    Route::POST('petugas/tulisartikel/uploadartikel','TulisArtikelController@store')->name('uploadartikel');
    Route::resource('petugas/rekam-medik', 'RekammedikController');
    Route::resource('petugas/data-obat', 'DataObatController');
   // CRUD Rekam Medik -------------------------------------------------------
   Route::POST('petugas/rekam-medik/simpandata','RekammedikController@store')->name('simpandata');
   Route::match(['get','post'], 'petugas/rekam-medik/edit/{id}','RekammedikController@edit');
   Route::GET('petugas/rekam-medik/delete/{id}','RekammedikController@delete');
   // -------------------------------------------------------------------------
   // CRUD Data Obat -------------------------------------------------------
   Route::POST('petugas/data-obat/simpanobat','DataObatController@store')->name('simpanobat');
   Route::match(['get','post'], 'petugas/data-obat/edit/{id}','DataObatController@edit');
   Route::GET('petugas/data-obat/delete/{id}','DataObatController@delete');
   // -------------------------------------------------------------------------
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route landing page prtugas
Route::get('/home', [App\Http\Controllers\frontend\HomeController::class, 'index'])->name('home');
Route::POST('/home/cari', [App\Http\Controllers\frontend\HomeController::class, 'cari'])->name('home.cari');

Route::get('admin/{id}', function ($id = null) {
  //  
})->middleware('auth');

 //Route Artikel
 Route::get('petugas/artikel', 'petugas\ArtikelController@index');
 Route::get('petugas/artikel/cari', 'petugas\ArtikelController@cari');
 Route::get('petugas/artikel/{id}/detail', 'petugas\ArtikelController@detail');

 //route tutorial
Route::get('/petugas/tutorial', 'petugas\TutorialController@index');
Route::get('/petugas/tutorial/{id}/detail', 'petugas\TutorialController@detail');

//Route untuk Frontend----------------------------------------------------
Route::group(['namespace' => 'Frontend'], function()
{
    // Route::resource('home', 'HomeController');
    // Route::resource('artikel', 'ArtikelController');
    // Route::resource('puskeswan', 'PuskeswanController');
    Route::resource('tentangkami', 'TentangKamiController');
    Route::resource('dokter', 'DaftarDokterController');
    Route::resource('detailartikel', 'DetailArtikelController');
    Route::resource('tulisartikel', 'TulisArtikelController');
    Route::resource('tuliskonsultasi', 'TulisKonsultasiController');
    Route::resource('detailpuskeswan', 'DetailPuskeswanController');
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route landing page frontend
Route::get('/home', [App\Http\Controllers\frontend\HomeController::class, 'index'])->name('home');
Route::POST('/home/cari', [App\Http\Controllers\frontend\HomeController::class, 'cari'])->name('home.cari');
Route::get('/home/tutorial/{id}/detail', [App\Http\Controllers\frontend\HomeController::class, 'detail'])->name('home.detail');

Route::get('admin/{id}', function ($id = null) {
  //  
})->middleware('auth');

//Route Artikel
Route::get('/artikel', 'Frontend\ArtikelController@index');
Route::get('/artikel/cari', 'Frontend\ArtikelController@cari');
Route::get('/artikel/{id}/detail', 'frontend\ArtikelController@detail');

//Route Tutorial
//route tutorial
Route::get('/tutorial', 'frontend\TutorialController@index');
Route::get('/tutorial/{id}/detail', 'frontend\TutorialController@detail');

//route dokter
Route::get('/dokter', 'frontend\DaftarDokterController@index');
Route::get('/dokter/{id}/detail', 'frontend\DaftarDokterController@detail');
Route::POST('/dokter/cari', [App\Http\Controllers\frontend\DaftarDokterController::class, 'cari'])->name('dokter.cari');

//Route Puskeswan
Route::get('/puskeswan', 'frontend\PuskeswanController@index');
Route::get('/puskeswan/cari', 'frontend\PuskeswanController@cari');
Route::get('/puskeswan/{id}/detail', 'frontend\PuskeswanController@detail');

//Route Konsultasi
Route::get('/konsultasi', 'frontend\KonsultasiController@index')->name('konsultasi.index');;
Route::get('/konsultasi/{id}/detail', 'frontend\KonsultasiController@detail')->name('konsultasi.detail');;