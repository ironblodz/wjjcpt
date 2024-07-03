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

Route::get('/contact', [PagesController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/dojos', [PagesController::class, 'showDojos'])->name('dojos.show');

Route::get('/dtn', [PagesController::class, 'showDtn'])->name('dtn.show');

Route::get('/founder', [PagesController::class, 'showFounder'])->name('founder.show');
Route::get('/gallery', [PagesController::class, 'showGallery'])->name('gallery.show');

Route::get('/kishido', [PagesController::class, 'showKishido'])->name('kishido.show');

Route::get('/wjjc', [PagesController::class, 'showWJJC'])->name('wjjc.show');

Route::get('/wjjcportugal', [PagesController::class, 'showWJJCPT'])->name('wjjcpt.show');

Route::get('/events', [PagesController::class, 'showEvents'])->name('event.show');

Route::get('/wjjcgallery', [PagesController::class, 'showWjjcGallery'])->name('wjjcgallery.show');

Route::get('/workout', [PagesController::class, 'showWorkout'])->name('workout.show');

Route::get('/certification', [PagesController::class, 'showCertification'])->name('certification.show');

Route::get('/logo', [PagesController::class, 'showLogo'])->name('logo.show');

// web.php

Route::get('/lang/{locale}', function ($locale) {
    // Salve o idioma escolhido na sessão
    session(['locale' => $locale]);

    // Redirecione de volta para a página anterior
    return back();
})->name('change.language');
