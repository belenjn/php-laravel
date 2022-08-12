<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingsController;

// Rutas: Home, about, room grid, room list, room details, offers, contacts.

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/contacts/crear', [ContactsController::class, 'create'])->name('createContacts');
Route::post('/contacts/crear', [ContactsController::class, 'store'])->name('saveContacts');
Route::get('/contacts/ver/{id}', [ContactsController::class, 'show'])->name('showContact');


Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms');
Route::get('/rooms/crear', [RoomsController::class, 'create'])->name('createRooms');
Route::post('/rooms/crear', [RoomsController::class, 'store'])->name('saveRooms');
Route::get('/rooms/ver/{id}', [RoomsController::class, 'show'])->name('showRoom');


Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings');
Route::get('/bookings/crear', [BookingsController::class, 'create'])->name('createBookings');
Route::post('/bookings/crear', [BookingsController::class, 'store'])->name('saveBookings');






