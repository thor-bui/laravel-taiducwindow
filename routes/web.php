<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use Illuminate\Support\Facades\Route;

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

Route::get('admin/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/login', [LoginController::class, 'store']);


Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', function () {
            return view('layouts.admin');
        })->name('dashboard');

        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    });

});

