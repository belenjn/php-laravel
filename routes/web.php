<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contacts', function () {
    return 'Contacts';
});

Route::get('/offers', function () {
    return 'Offers';
});

Route::get('/rooms', function () {
    return 'Rooms';
});

Route::get('/rooms/{id}', function ($id) {
    return 'Room Detail: {$id}';
});

Route::get('/rooms', function ($checkin, $checkout) {
    if($checkin && $checkout) {
        return "Rooms available from {$checkin} to {$checkout}";
    } else {
        return "there are no rooms available on that date";
    }
});

// la url debería quedar como /rooms/result?checkin=2022-10-01&checkout=2022-10-07


