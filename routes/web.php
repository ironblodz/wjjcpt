<?php

use App\Http\Controllers\ContactController;

use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('layouts.index');
})->name('index');


Route::middleware(['auth'])->group(function () {
    Route::get('/contact', [PagesController::class, 'showForm'])->name('contact.show');
    Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

    Route::get('/clubs', [PagesController::class, 'showClubs'])->name('clubs.show');

    Route::get('/dtn', [PagesController::class, 'showDtn'])->name('dtn.show');

    Route::get('/founder', [PagesController::class, 'showFounder'])->name('founder.show');
    Route::get('/gallery', [PagesController::class, 'showGallery'])->name('gallery.show');

    Route::get('/kishido', [PagesController::class, 'showKishido'])->name('kishido.show');

    Route::get('/wjjc', [PagesController::class, 'showWJJC'])->name('wjjc.show');

    Route::get('/wjjcportugal', [PagesController::class, 'showWJJCPT'])->name('wjjcpt.show');

    Route::get('/events', [PagesController::class, 'showEvents'])->name('event.show');

    Route::get('/wjjcgallery', [PagesController::class, 'showWjjcGallery'])->name('wjjcgallery.show');

    Route::get('/workout', [PagesController::class, 'showWorkout'])->name('workout.show');
});
