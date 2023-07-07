<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HitungController;


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

Route::get('/',[App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/', function () {
    return view('home');
});

Route::get('/datapeserta', function () {
    return view('datapeserta');
});


Route::get('/datapeserta', [PesertaController::class, 'hitung'])->name('hitung');

Route::get('/spk',function(){
    return view('main');
});

Route::controller(PesertaController::class)->group(function() {
    Route::get('peserta/', 'index');
    Route::get('peserta/add', 'add');
    Route::post('peserta/store', 'store');
    Route::get('peserta/edit/{id}', 'edit');
    Route::post('peserta/update/{id}', 'update');
    Route::get('peserta/delete/{id}', 'delete');
});

Route::controller(KriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
});

Route::controller(AlternatifController::class)->group(function() {
    Route::get('alternatif/', 'index');
    Route::get('alternatif/add', 'add');
    Route::post('alternatif/store', 'store');
    Route::get('alternatif/edit/{id}', 'edit');
    Route::post('alternatif/update/{id}', 'update');
    Route::get('alternatif/delete/{id}', 'delete');
});

Route::get('/hitung', [HitungController::class, 'hitung'])->name('hitung');

// Route::get('/login', function () {
   // return view('Login');
// });







