<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingsController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/offers', [RoomsController::class, 'indexOffers']);

Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms');
Route::get('/rooms/crear', [RoomsController::class, 'create'])->name('createRooms');
Route::post('/rooms/crear', [RoomsController::class, 'store'])->name('saveRooms');
Route::get('/rooms/ver/{id}', [RoomsController::class, 'show'])->name('showRoom');


Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings');
Route::get('/bookings/crear', [BookingsController::class, 'create'])->name('createBookings');
Route::post('/bookings/crear', [BookingsController::class, 'store'])->name('saveBookings');

 
?>



