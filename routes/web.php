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
Route::get('/rooms', [RoomsController::class, 'index']);
Route::get('/bookings', [BookingsController::class, 'index']);


// la url debería quedar como /rooms/result?checkin=2022-10-01&checkout=2022-10-07


