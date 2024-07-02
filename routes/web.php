<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route to show the contact form
Route::get('/contact', [ContactController::class, 'show'])->name('contact');



// Route to handle form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// About route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Appointments route
Route::get('/appointments', function () {
    return view('appointments.index');
})->name('appointments');

// Reiki route
Route::get('/appointments/reiki', function () {
    return view('appointments.reiki');
})->name('appointments.reiki');

// Bach Flowers routes
Route::get('/bachflowers', function () {
    return view('bachflowers.index');
})->name('bachflowers');

Route::get('/appointments/bachflowers/face-to-face', function () {
    return view('appointments.bachflowers-face-to-face');
})->name('appointments.bachflowers.face-to-face');

Route::get('/appointments/bachflowers/zoom', function () {
    return view('appointments.bachflowers-zoom');
})->name('appointments.bachflowers.zoom');

// Routes for Bach Flowers categories
Route::get('/bachflowers/fear', function () {
    return view('bachflowers.fear');
})->name('bachflowers.fear');

Route::get('/bachflowers/uncertainty', function () {
    return view('bachflowers.uncertainty');
})->name('bachflowers.uncertainty');

Route::get('/bachflowers/insufficient-interest', function () {
    return view('bachflowers.insufficient-interest');
})->name('bachflowers.insufficient-interest');

Route::get('/bachflowers/loneliness', function () {
    return view('bachflowers.loneliness');
})->name('bachflowers.loneliness');

Route::get('/bachflowers/oversensitivity', function () {
    return view('bachflowers.oversensitivity');
})->name('bachflowers.oversensitivity');

Route::get('/bachflowers/despondency', function () {
    return view('bachflowers.despondency');
})->name('bachflowers.despondency');

Route::get('/bachflowers/overcare', function () {
    return view('bachflowers.overcare');
})->name('bachflowers.overcare');

// Reiki route
Route::get('/reiki', function () {
    return view('reiki');
})->name('reiki');

// Authentication routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include auth routes
require __DIR__.'/auth.php';
