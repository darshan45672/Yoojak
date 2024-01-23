<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[DashboardController::class, 'index'])->name('home');

Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/contact', [DashboardController::class,'contact'])->name('contact');
Route::get('/placement', [DashboardController::class,'placement'])->name('placement');
