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

//auth route for both 
Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/pilih-zona', 'App\Http\Controllers\DashboardController@zona')->name('pilih-zona');

    //pilih zona
    Route::match(['get', 'post'],'/pilih-zona/{id}', 'App\Http\Controllers\DashboardController@pilih')->name('zona');

    // klub
    Route::get('/klub/{id}', [App\Http\Controllers\ZonaController::class, 'klub'])->name('klub.zona');
    Route::match(['get', 'post'], '/klub/add/{id}',  [App\Http\Controllers\KlubController::class, 'update'])->name('klub.create');

    // official
    Route::get('/official/{id}', [App\Http\Controllers\ZonaController::class, 'official'])->name('official.zona');
    Route::match(['get', 'post'], '/official/add/{id}',  [App\Http\Controllers\OfficialController::class, 'store'])->name('official.create');
    Route::get('/official-detail/{id}/{official_id}', [App\Http\Controllers\OfficialController::class, 'detail'])->name('official.detail');
    Route::match(['get', 'post'], '/official-detail/{id}', 'App\Http\Controllers\OfficialController@edit')->name('official.update');
    Route::delete('/official/{id}', 'App\Http\Controllers\OfficialController@delete');

     // pemain
     Route::get('/pemain/{id}', [App\Http\Controllers\ZonaController::class, 'pemain'])->name('pemain.zona');
     Route::match(['get', 'post'], '/pemain/add/{id}',  [App\Http\Controllers\PemainController::class, 'store'])->name('pemain.create');
     Route::get('/pemain-detail/{id}/{pemain_id}', [App\Http\Controllers\PemainController::class, 'detail'])->name('pemain.detail');
     Route::match(['get', 'post'], '/pemain-detail/{id}', 'App\Http\Controllers\PemainController@edit')->name('pemain.update');
     Route::delete('/pemain/{id}', 'App\Http\Controllers\PemainController@delete');
     Route::match(['get', 'post'], '/pemain/kelusia/{id}/{pemain_id}', 'App\Http\Controllers\PemainController@tambahusia')->name('pemain.usia');
     Route::get('/pemain/kelompok-usia/{id}', 'App\Http\Controllers\PemainController@kelusia')->name('kelusia');

    //admin klub
    Route::get('/admin/klub', 'App\Http\Controllers\KlubController@adminklub')->name('admin.klub');
    Route::get('/klubadmin-detail/{id}', [App\Http\Controllers\KlubController::class, 'detailadminklub'])->name('adminklub.detail');
    Route::get('/admin/klub/{zona}', 'App\Http\Controllers\KlubController@render')->name('klubs.zona');  
    Route::get('/admin/klub/official/{id}', 'App\Http\Controllers\KlubController@official')->name('klubs.official');
    Route::get('/admin/klub/official/detail/{id}', 'App\Http\Controllers\KlubController@officialdetail')->name('klubs.officialdetail');
    Route::get('/admin/klub/pemain/{id}', 'App\Http\Controllers\KlubController@pemain')->name('klubs.pemain');
    Route::get('/admin/klub/pemain/detail/{id}', 'App\Http\Controllers\KlubController@pemaindetail')->name('klubs.pemaindetail');
    
    //manajemen
    Route::get('/admin/zona', 'App\Http\Controllers\ZonaController@admin')->name('admin.zona');
    Route::post('/admin/zona/post', 'App\Http\Controllers\ZonaController@postadmin')->name('admin.zonapost');
    Route::delete('/admin/zona/delete/{id}', 'App\Http\Controllers\ZonaController@deleteadmin');
    Route::post('/admin/zona/edit/{id}', 'App\Http\Controllers\ZonaController@editadmin')->name('admin.zonaedit');
    Route::get('/admin/kelompok-usia', 'App\Http\Controllers\UsiaController@admin')->name('admin.kelusia');
    Route::get('/admin/zona-kelompok-usia', 'App\Http\Controllers\UsiaController@zonakelusia')->name('admin.zonakelusia');
});


require __DIR__ . '/auth.php';
