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


Route::get('/contacts', [ContactsController::class, 'index']);
Route::get('/contacts/crear', [ContactsController::class, 'create']);
Route::post('/contacts/crear', [ContactsController::class, 'store']);
Route::get('/contacts/ver/{id}', [ContactsController::class, 'show']);


Route::get('/rooms', [RoomsController::class, 'index']);
Route::get('/rooms/crear', [RoomsController::class, 'create']);
Route::post('/rooms/crear', [RoomsController::class, 'store']);
Route::get('/rooms/ver/{id}', [RoomsController::class, 'show']);


Route::get('/bookings', [BookingsController::class, 'index']);
Route::get('/bookings/crear', [BookingsController::class, 'create']);
Route::post('/bookings/crear', [BookingsController::class, 'store']);






