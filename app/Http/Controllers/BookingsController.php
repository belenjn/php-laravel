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

  
    public function show(Request $request)
    {
        $checkin = $request->input('checkin');
        return view('bookings.lista', ['checkin' => $checkin]);
    }





  
}
