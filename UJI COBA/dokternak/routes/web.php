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
});
// ------------------------------------------------------------------------

// Route untuk Petugas ----------------------------------------------------
Route::group(['namespace' => 'Petugas'], function()
{
    Route::resource('petugas/artikel', 'ArtikelController');
});

//Route untuk Frontend----------------------------------------------------
Route::group(['namespace' => 'Frontend'], function()
{
    // Route::resource('home', 'HomeController');
    // Route::resource('artikel', 'ArtikelController');
    Route::resource('puskeswan', 'PuskeswanController');
    Route::resource('tentangkami', 'TentangKamiController');
    Route::resource('dokter', 'DaftarDokterController');
    Route::resource('detailartikel', 'DetailArtikelController');
    Route::resource('tulisartikel', 'TulisArtikelController');
    Route::resource('detaildokter', 'DetailDokterController');
    Route::resource('detailpuskeswan', 'DetailPuskeswanController');
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route landing page frontend
Route::get('/home', [App\Http\Controllers\frontend\HomeController::class, 'index'])->name('home');
Route::POST('/home/cari', [App\Http\Controllers\frontend\HomeController::class, 'cari'])->name('home.cari');

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

//Route dokter
Route::get('/detaildokter', 'frontend\DetailDokter@index');
Route::get('/detaildokter/{id}/detaildokter', 'frontend\DetailDokterController@detail');