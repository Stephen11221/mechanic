<?php

use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\viewppointmentController;
use App\Http\Controllers\AboutUsController;
use function PHPUnit\Framework\returnSelf;


Route::resource('appointments', AppointmentController::class);

    Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/service', function () {
    return view('service');
})->name('service');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus.index');




// Apply 'auth' middleware to protect AboutUs routes

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard-file.dashboard'); // Adjust path if needed
    })->name('dashboard');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/viewappointment', [ViewppointmentController::class, 'index'])->name('viewappointments.index');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/createabout', [AboutUsController::class, 'create'])->name('createabout.create'); // Show form
    Route::post('/createabout', [AboutUsController::class, 'store'])->name('createabout.store'); 

});


// end of protected route


/// logout


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/'); // Redirect to home or login page
})->name('logout');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Auth::routes(['verify' => true]); // Includes login, registration & email verification

require __DIR__.'/auth.php';
