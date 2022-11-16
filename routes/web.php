<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasjidController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KajianController;
use App\Http\Controllers\KeuanganController;

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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::resource('masjid', MasjidController::class)->except(['create', 'store', 'destroy']);

Route::resource('kajian', KajianController::class)->except(['show']);

Route::resource('keuangan', KeuanganController::class)->except(['index']);