<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [\App\Http\Controllers\FrontPage\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
Route::resource('/product', App\Http\Controllers\Admin\ProductController::class);
Route::resource('/feature', App\Http\Controllers\Admin\FeatureController::class);
Route::resource('/setting', App\Http\Controllers\Admin\SettingController::class);
Route::resource('/about', App\Http\Controllers\Admin\AboutController::class);
Route::resource('/sponsor', App\Http\Controllers\Admin\SponsorController::class);
Route::resource('/gallery', App\Http\Controllers\Admin\GalleryController::class);
Route::resource('/user', App\Http\Controllers\Admin\UserController::class);
