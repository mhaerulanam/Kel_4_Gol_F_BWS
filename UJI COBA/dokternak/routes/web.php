<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('is_admin');
Route::get('lppetugas', [HomeController::class, 'lppetugas'])->name('lppetugas')->middleware('is_admin');
// Route::get('home', [HomeController::class, 'index'])->name('home');
Auth::routes();

// Route untuk Backend ----------------------------------------------------
Route::group(['namespace' => 'Backend'], function()
{
    Route::resource('pendidikan', 'PendidikanController');
    Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
    Route::resource('peternak', 'PeternakController');
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
    Route::resource('tutorial', 'TutorialController');
    Route::resource('tulisartikel', 'TulisArtikelController');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route landing page frontend
Route::get('/home', [App\Http\Controllers\frontend\HomeController::class, 'index'])->name('home');
Route::POST('/home/cari', [App\Http\Controllers\frontend\HomeController::class, 'cari'])->name('home.cari');

Route::get('admin/{id}', function ($id = null) {
  //  
})->middleware('auth');

Route::get('/artikel', 'Frontend\ArtikelController@index');
Route::get('/artikel/cari', 'Frontend\ArtikelController@cari');
