<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\PhotoController as AdminPhotoController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\PagesController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PhotoController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('layouts.index');
})->name('index');

Route::get('/contact', [PagesController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/dojos', [PagesController::class, 'showDojos'])->name('dojos.show');

Route::get('/dtn', [PagesController::class, 'showDtn'])->name('dtn.show');

Route::get('/founder', [PagesController::class, 'showFounder'])->name('founder.show');
Route::get('/gallery', [PagesController::class, 'showGallery'])->name('gallery.show');

Route::get('/affiliations', [PagesController::class, 'showAffiliations'])->name('affiliations.show');
Route::get('/association', [PagesController::class, 'showAssociation'])->name('association.show');
Route::get('/sponsors', [PagesController::class, 'showSponsors'])->name('sponsors.show');

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('backoffice/admin')->name('backoffice.admin.')->group(function () {
        // Rotas para Photos
        Route::resource('photos', PhotoController::class);
        // Rotas para Categories
        Route::resource('categories', CategoryController::class);
    });
});

require __DIR__ . '/auth.php';
