<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;




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


//Admin Login functionality
Route::group(['middleware' => 'guest'], function ($router) {
    Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login/submit', [LoginController::class, 'submit'])->name('login.submit'); 
});

//After Login Redirect To Dashboard screen
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function ($router) {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
});


//Frontend
Route::get('/', [HomeController::class, 'index'])->name('index');

//Product List
Route::get('/products', [ProductController::class, 'list'])->name('product.list');
