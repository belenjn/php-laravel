<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Rutas: Home, about, room grid, room list, room details, offers, contacts.

Route::get('/', function () {
    return 'Home';
});

Route::get('/about', function () {
    return 'About';
});

Route::get('/offers', function () {
    return 'Offers';
});


Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/crear', [UsersController::class, 'create']);
Route::post('/users/crear', [UsersController::class, 'store']);
Route::get('/users/ver/{id}', [UsersController::class, 'show']);
Route::get('/users/editar/{id}', [UsersController::class, 'edit']);
Route::put('/users/editar/{id}', [UsersController::class, 'update']);
Route::get('/users/eliminar/{id}', [UsersController::class, 'destroy']);

Route::get('/contacts', [ContactsController::class, 'index']);
Route::get('/contacts/crear', [ContactsController::class, 'create']);
Route::post('/contacts/crear', [ContactsController::class, 'store']);
Route::get('/contacts/ver/{id}', [ContactsController::class, 'show']);
Route::get('/contacts/editar/{id}', [ContactsController::class, 'edit']);
Route::put('/contacts/editar/{id}', [ContactsController::class, 'update']);
Route::get('/contacts/eliminar/{id}', [ContactsController::class, 'destroy']);


Route::get('/rooms', [RoomsController::class, 'index']);
Route::get('/rooms/crear', [RoomsController::class, 'create']);
Route::post('/rooms/crear', [RoomsController::class, 'store']);
Route::get('/rooms/ver/{id}', [RoomsController::class, 'show']);
Route::get('/rooms/editar/{id}', [RoomsController::class, 'edit']);
Route::put('/rooms/editar/{id}', [RoomsController::class, 'update']);
Route::get('/rooms/eliminar/{id}', [RoomsController::class, 'destroy']);

Route::get('/bookings', [BookingsController::class, 'index']);
Route::get('/bookings/crear', [BookingsController::class, 'create']);
Route::post('/bookings/crear', [BookingsController::class, 'store']);
Route::get('/bookings/ver/{id}', [BookingsController::class, 'show']);
Route::get('/bookings/editar/{id}', [BookingsController::class, 'edit']);
Route::put('/bookings/editar/{id}', [BookingsController::class, 'update']);
Route::get('/bookings/eliminar/{id}', [BookingsController::class, 'destroy']);





