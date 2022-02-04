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

//umum
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/informasi', [App\Http\Controllers\InformasiUmumController::class, 'index'])->name('informasi');

//usia
Route::get('/usia', [App\Http\Controllers\UsiaController::class, 'index'])->name('usia');

//zona
Route::get('/zona', [App\Http\Controllers\ZonaController::class, 'index'])->name('zona');

//manajer
Route::get('/manajer', [App\Http\Controllers\ManajerController::class, 'index'])->name('manajer');

//auth route for both 
Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

    // pemain
    Route::get('/pemain/{id}', [App\Http\Controllers\ZonaController::class, 'pemain'])->name('pemain.zona');

    // klub
    Route::get('/klub/{id}', [App\Http\Controllers\ZonaController::class, 'klub'])->name('klub.zona');
    Route::match(['get', 'post'], '/klub/add/{id}',  [App\Http\Controllers\KlubController::class, 'update'])->name('klub.create');

    // official
    Route::get('/official/{id}', [App\Http\Controllers\ZonaController::class, 'official'])->name('official.zona');
    Route::get('/official/create', [App\Http\Controllers\OfficialController::class, 'create'])->name('official.create');
});


require __DIR__ . '/auth.php';
