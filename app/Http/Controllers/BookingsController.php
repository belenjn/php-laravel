<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;

class BookingsController extends Controller
{
    protected $bookings;

    public function index()
    {
        $bookings = Bookings::all();
        return view('bookings.lista', ['bookings' => $bookings]);
    }

  
    public function show($id)
    {
        $booking = Bookings::find($id);
        return view('bookings.ver', ['booking' => $booking]);
    }




  
}
