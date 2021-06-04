<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\frontend\ArtikelController;

Route::get('admin/profile', function ($id) {
    //
})->middleware(CheckAge::class);


Route::get('/', function () {
    return view('welcome');
});

// Route untuk Backend ----------------------------------------------------
Route::group(['namespace' => 'Backend'], function()
{
    Route::resource('dashboard', 'DashboardController');
    Route::resource('peternak', 'PeternakController');
});
// ------------------------------------------------------------------------
//Route untuk Frontend----------------------------------------------------
Route::group(['namespace' => 'Frontend'], function()
{
    Route::resource('home', 'HomeController');
    Route::resource('artikel', 'ArtikelController');
    Route::resource('puskeswan', 'PuskeswanController');
});


//route artikel
// Route::get('/artikel','Frontend\ArtikelController@index');
// Route::get('/artikel/cari','Frontend\ArtikelController@cari');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/{id}', function ($id = null) {
  //  
})->middleware('auth');

// Route::get('/', function ($id = null) {
//     //  
// })->middleware('first','second');

// Route::get('/', function ($id = null) {
//     //
// })->middleware('web');

Route::group(['middleware' => ['web']], function () {
    //
});

Route::middleware(['web','subscribed'])->group(function () {
    //
});

Route::put('post/{id}', function ($id = null) {
  //  
})->middleware('role:editor');