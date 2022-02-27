<?php

use App\Http\Controllers\Admin\LoginController;
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
    Route::get('admin/dashboard', function () {
        return 'dashboard';
    })->name('dashboard');
});

