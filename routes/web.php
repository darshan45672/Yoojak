<?php

use App\Livewire\ShowAboutPlacement;
use App\Livewire\ShowAboutUs;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowPlacedStudents;
use App\Livewire\ShowPlacements;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', ShowHome::class)->name('home');
Route::get('/placement', ShowPlacements::class)->name('show-Placement');
Route::get('/placed-students', ShowPlacedStudents::class)->name('show-PlacedStudent');
Route::get('/contact-us', ShowContactPage::class)->name('contact');
Route::get('/about-us', ShowAboutUs::class)->name('about-us');
Route::get('/about-our-placement', ShowAboutPlacement::class)->name('about-our-placement');
