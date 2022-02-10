<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\OfferController;
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

Route::get('/', function() {
    return redirect('/palemo');
})->name('home');

Route::get('/palemo', [OfferController::class,  'palemo'])->name('palemo');
Route::get('/catalina', [OfferController::class,  'catalina'])->name('catalina');
Route::get('/roma', [OfferController::class,  'roma'])->name('roma');
Route::get('/milano', [OfferController::class,  'milano'])->name('milano');
