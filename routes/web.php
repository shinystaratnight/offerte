<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Middleware\EnsureDepatureIsValid;
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

Route::get('/', [OfferController::class, 'index'])->name('index')
    ->middleware(EnsureDepatureIsValid::class);
Route::get('/get-content', [OfferController::class, 'getContent'])->name('get_content');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [OfferController::class, 'admin'])->name('admin')
        ->middleware(EnsureDepatureIsValid::class);
    Route::get('/admin/create', [OfferController::class, 'create'])->name('create');
    Route::post('/admin/offer', [OfferController::class, 'store'])->name('store');
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login-user', [AuthController::class, 'login'])->name('login_user');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
