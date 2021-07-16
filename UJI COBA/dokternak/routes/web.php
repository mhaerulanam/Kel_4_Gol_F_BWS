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


//CRUD Data Artikel -------------------------------------------------------------------
// Route::get('/dashboard/data_artikel', 'backend/DataArtikelController@index');
Route::POST('dashboard/data_artikel/simpandata','DataArtikelController@store')->name('simpandata');
Route::match(['get','post'], 'dashboard/data_artikel/edit/{id}','DataArtikelController@edit');
Route::GET('dashboard/data_artikel/delete/{id}','DataArtikelController@delete');
Route::get('/cetak_pdf/data_artikel','DataArtikelController@cetakartikel')->name('backend.data_artikel.cetak_pdf');

//CRUD Data Banner -------------------------------------------------------------------
Route::POST('dashboard/data_banner/simpandata','DataBannerController@store')->name('simpandata');
Route::match(['get','post'], 'dashboard/data_banner/edit/{id}','DataBannerController@edit');
Route::GET('dashboard/data_banner/delete/{id}','DataBannerController@delete');
Route::get('/cetak_pdf/data_banner','DataBannerController@cetak_pdf')->name('backend.data_banner.cetak_pdf');

//CRUD Data Tutorial -------------------------------------------------------------------
Route::POST('dashboard/data_tutorial/simpandata','DataTutorialController@store')->name('simpandata');
Route::match(['get','post'], 'dashboard/data_tutorial/edit/{id}','DataTutorialController@edit');
Route::GET('dashboard/data_tutorial/delete/{id}','DataTutorialController@delete');
Route::get('/cetak_pdf/data_tutorial','DataTutorialController@cetak_pdf')->name('backend.data_tutorial.cetak_pdf');

//CRUD Data Puskeswan -------------------------------------------------------------------
Route::POST('dashboard/data_puskeswan/simpandata','DataPuskeswanController@store')->name('simpandata');
Route::match(['get','post'], 'dashboard/data_puskeswan/edit/{id}','DataPuskeswanController@edit');
Route::GET('dashboard/data_puskeswan/delete/{id}','DataPuskeswanController@delete');
Route::get('/cetak_pdf/data_puskeswan','DataPuskeswanController@cetak_pdf')->name('backend.data_tutorial.cetak_pdf');

//CRUD Data Peternak -------------------------------------------------------------------
Route::POST('dashboard/peternak/simpandata','PeternakController@store')->name('simpandata');
Route::match(['get','post'], 'dashboard/peternak/edit/{id}','PeternakController@edit');
Route::GET('dashboard/peternak/delete/{id}','PeternakController@delete');
Route::get('/cetak_pdf/peternak','PeternakController@cetak_pdf')->name('backend.peternak.cetak_pdf');

});
// ------------------------------------------------------------------------

// Route untuk Petugas ----------------------------------------------------
Route::group(['namespace' => 'Petugas'], function()
{
  Route::resource('petugas/tentangkami', 'TentangKamiController');
    // Route::resource('petugas/artikel', 'ArtikelController');
    Route::resource('petugas/home', 'HomeController');
    Route::resource('petugas/detailartikel', 'DetailArtikelController');
    Route::resource('petugas/tutorial', 'TutorialController');
    Route::resource('petugas/tulisartikel', 'TulisArtikelController');
    Route::POST('petugas/tulisartikel/uploadartikel','TulisArtikelController@store')->name('uploadartikel');
    Route::resource('petugas/rekam-medik', 'RekammedikController');
    Route::resource('petugas/data-obat', 'DataObatController');
    Route::resource('petugas/respon-konsultasi', 'ResponKonsultasiController');
   // CRUD Rekam Medik -------------------------------------------------------
   Route::POST('petugas/rekam-medik/simpandata','RekammedikController@store')->name('simpandata');
   Route::match(['get','post'], 'petugas/rekam-medik/edit/{id}','RekammedikController@edit');
   Route::GET('petugas/rekam-medik/delete/{id}','RekammedikController@delete');
   Route::get('cetak_pdf/rekammedik','RekammedikController@cetakrmd')->name('petugas.rekam_medik.cetak_pdf');
   // -------------------------------------------------------------------------
   // CRUD Data Obat -------------------------------------------------------
   Route::POST('petugas/data-obat/simpanobat','DataObatController@store')->name('simpanobat');
   Route::match(['get','post'], 'petugas/data-obat/edit/{id}','DataObatController@edit');
   Route::GET('petugas/data-obat/delete/{id}','DataObatController@delete');
   // -------------------------------------------------------------------------
   //  Respon Konsultasi
   Route::get('/petugas/respon-konsultasi', 'ResponKonsultasiController@index')->name('respon.index');
   Route::POST('/petugas/respon-konsultasi/kirimbalasan', 'ResponKonsultasiController@store')->name('respon.store');
   Route::get('/petugas/respon-konsultasi/{id}/detail', 'ResponKonsultasiController@detail')->name('respon.detail');
   Route::get('/petugas/respon-konsultasi/{id}/detailterkirim', 'ResponKonsultasiController@detailterkirim')->name('respon.detailterkirim');
   Route::get('/petugas/respon-konsultasi/{id}/hapusterkirim/{idk}/riwayat','ResponKonsultasiController@hapusterkirim')->name('respon.hapusterkirim');
   //Route Profil
  //  Route::get('/profil', 'frontend\ProfilController@index')->name('profil.index');
   Route::get('lppetugas/editprofil/{id}', 'EditProfilController@edit')->name('editprofilpetugas.edit');
   Route::PUT('lppetugas/editprofil/{id}','EditProfilController@update')->name('editprofilpetugas.update');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route landing page prtugas
Route::get('/home', [App\Http\Controllers\frontend\HomeController::class, 'index'])->name('home');
Route::POST('/home/cari', [App\Http\Controllers\frontend\HomeController::class, 'cari'])->name('home.cari');

Route::get('admin/{id}', function ($id = null) {
  //  
})->middleware('auth');

//Route Reset Password
Route::get('change-password', 'frontend\ResetPasswordController@changePassword')->name('change-password')->middleware('auth');
Route::POST('update-password', 'frontend\ResetPasswordController@updatePassword')->name('update-password')->middleware('auth');

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
Route::POST('/dokter/kategori', [App\Http\Controllers\frontend\DaftarDokterController::class, 'kategori'])->name('dokter.kategori');


//Route Puskeswan
Route::get('/puskeswan', 'frontend\PuskeswanController@index');
Route::get('/puskeswan/cari', 'frontend\PuskeswanController@cari');
Route::get('/puskeswan/{id}/detail', 'frontend\PuskeswanController@detail');

//Route Konsultasi
Route::get('/konsultasi', 'frontend\KonsultasiController@index')->name('konsultasi.index');
Route::get('/konsultasi/{id}/detail', 'frontend\KonsultasiController@detail')->name('konsultasi.detail');
Route::get('/konsultasi/{id}/detailmasuk/{idk}', 'frontend\KonsultasiController@detailmasuk')->name('konsultasi.detailmasuk');
Route::get('/konsultasi/{id}/hapus','frontend\KonsultasiController@hapus')->name('konsultasi.hapus');
Route::get('/konsultasi/{id}/hapusmasuk/{idk}/detail/{idr}','frontend\KonsultasiController@hapusmasuk')->name('konsultasi.hapusmasuk');

//Route Profil
Route::get('/profil', 'frontend\ProfilController@index')->name('profil.index');
Route::get('/editprofil/{id}', 'frontend\ProfilController@edit')->name('editprofil.edit');
Route::PUT('/editprofil/{id}','frontend\ProfilController@update')->name('editprofil.update');