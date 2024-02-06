<?php

use App\Http\Controllers\AuthController;
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

Route::get('/',[DashboardController::class, 'home']) ->name('home');
Route::get('/about',[DashboardController::class, 'about']) ->name('about');
Route::get('/placed-students',[DashboardController::class, 'placed']) ->name('placedStudents');
Route::get('/placement-updates',[DashboardController::class, 'placementUpdates']) ->name('placementUpdates');
Route::get('/contact',[DashboardController::class, 'contact']) ->name('contact');

Route::get('/profile',[DashboardController::class, 'profile']) ->name('profile');

Route::get('/register', [AuthController::class, 'register']) ->name('register');
Route::post('/register', [AuthController::class, 'store']) ->name('register');

Route::get('/login', [AuthController::class, 'login']) ->name('login');
Route::post('/login', [AuthController::class, 'authenticate']) ->name('login');

Route::post('/logout', [AuthController::class, 'logout']) ->name('logout');
