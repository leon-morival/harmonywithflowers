<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// Home route
Route::get('/home', function () {
    return view('home');
})->name('home'); 

// About route
Route::get('/about', function () {
    return view('about');
})->name('about'); 

// Contact route
Route::get('/contact', function () {
    return view('contact');
})->name('contact'); 

// Appointments route
Route::get('/appointments', function () {
    return view('appointments/index');
})->name('appointments'); 

// Reiki route
Route::get('/appointments/reiki', function () {
    return view('appointments.reiki');
})->name('appointments.reiki');

// Bach Flowers routes
Route::get('/appointments/bachflowers/face-to-face', function () {
    return view('appointments.bachflowers-face-to-face');
})->name('appointments.bachflowers.face-to-face');

Route::get('/appointments/bachflowers/zoom', function () {
    return view('appointments.bachflowers-zoom');
})->name('appointments.bachflowers.zoom');

// Reiki route
Route::get('/reiki', function () {
    return view('reiki');
})->name('reiki'); 

// Bach Flowers route
Route::get('/bachflowers', function () {
    return view('bachflowers/index');
})->name('bachflowers'); 

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
