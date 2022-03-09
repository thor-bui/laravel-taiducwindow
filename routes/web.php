<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\ProductCategoryController;
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

Route::controller(LoginController::class)->group(function () {
    Route::get('admin/login', 'index')->name('login');
    Route::post('admin/login', 'store');
});


Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {

        # product category router
        Route::controller(ProductCategoryController::class)->name('category.')->group(function () {
            Route::get('/', 'index');
            Route::get('/category/list', 'index')->name('list');
            Route::get('/category/add', 'create')->name('add');
            Route::post('/category/add', 'store');
            Route::get('/category/edit/{id}', 'edit')->name('edit');
            Route::put('/category/edit/{id}', 'update');
            Route::delete('/category/delete', 'destroy');
        });


        # logout
        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    });

});

