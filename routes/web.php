<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

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


Route::get('/', [pageController::class, 'home'])->name('home');
Route::get('/team', [pageController::class, 'team'])->name('team');
Route::get('/contact', [pageController::class, 'contact'])->name('contact');
Route::get('/about', [pageController::class, 'about'])->name('about');
Route::get('/products', [pageController::class, 'products'])->name('products');

