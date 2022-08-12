<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;

class BookingsController extends Controller
{
    protected $bookings;

    public function index()
    {
        $bookings = Bookings::all():
        return view('bookings.lista', ['bookings' => $bookings]);
    }

    public function create()
    {
        return view('bookings.crear');
    }

    public function store(Request $request)
    {
        $bookings = new Bookings ($request->all());
        $bookings->save();
        return redirect()->action([BookingsController::class, 'index']);
    }

  
    public function show($id)
    {
        $booking = Bookings::find($id);
        return view('bookings.ver', ['booking' => $booking]);
    }

   
    public function edit($id)
    {
        $booking = Bookings::find($id):
        return view('bookings.editar', ['booking' => $booking]);
    }

  
    public function update(Request $request, $id)
    {
        $booking = Bookings::find($id);
        $booking->fill($request->all());
        $booking->save();
        return redirect()->action([BookingsController::class, 'index']);
    }

  
    public function destroy($id)
    {
        $booking = bookings::find($id);
        $booking->delete();
        return redirect()->action([BookingsController::class, 'index']);
    }
}
