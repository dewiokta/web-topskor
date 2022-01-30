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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin/login');
Route::get('/manajer', [App\Http\Controllers\ManajerController::class, 'index'])->name('manajer.dashboard');

// klub
Route::get('/klub', [App\Http\Controllers\KlubController::class, 'index'])->name('klub');
Route::get('klub/create', [App\Http\Controllers\KlubController::class, 'create'])->name('klub.create');

// official
Route::get('/official', [App\Http\Controllers\OfficialController::class, 'index'])->name('official');
Route::get('/official/create', [App\Http\Controllers\OfficialController::class, 'create'])->name('official.create');

// pemain
Route::get('/pemain', [App\Http\Controllers\PemainController::class, 'index'])->name('pemain');
Route::get('/pemain/create', [App\Http\Controllers\PemainController::class, 'create'])->name('pemain.create');


