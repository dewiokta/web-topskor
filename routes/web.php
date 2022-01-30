<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KlubController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// klub
Route::get('/klub', [App\Http\Controllers\KlubController::class, 'index'])->name('klub');
Route::get('klub/create', [App\Http\Controllers\KlubController::class, 'create'])->name('klub.create');

// official
Route::get('/official', [App\Http\Controllers\OfficialController::class, 'index'])->name('official');
Route::get('/official/create', [App\Http\Controllers\OfficialController::class, 'create'])->name('official.create');

// pemain
Route::get('/pemain', [App\Http\Controllers\PemainController::class, 'index'])->name('pemain');
Route::get('/pemain/create', [App\Http\Controllers\PemainController::class, 'create'])->name('pemain.create');

//usia
Route::get('/usia', [App\Http\Controllers\UsiaController::class, 'index'])->name('usia');

//zona
Route::get('/zona', [App\Http\Controllers\ZonaController::class, 'index'])->name('zona');

//manajer
Route::get('/manajer', [App\Http\Controllers\ManajerController::class, 'index'])->name('manajer');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/informasi', [App\Http\Controllers\InformasiUmumController::class, 'index'])->name('informasi');

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});



require __DIR__.'/auth.php';
