<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;

class RoomsController extends Controller
{
    protected $rooms;

    public function __construct(Rooms $rooms)
    {
        $this->rooms = $rooms;
    }

    public function index()
    {
        $rooms = $this->rooms->getRooms();
        return view('rooms.lista', ['rooms' => $rooms]);
    }

    public function create()
    {
        return view('rooms.crear');
    }

    public function store(Request $request)
    {
        $rooms = new Rooms ($request->all());
        $rooms->save();
        return redirect()->action([RoomsController::class, 'index']);
    }

    public function show($id)
    {
        $room = $this->rooms->getRoom($id);
        return view('rooms.ver', ['room' => $room]);
    }

    public function edit($id)
    {
        $room = $this->rooms->getRoom($id);
        return view('rooms.editar', ['room' => $room]);
    }

    public function update(Request $request, $id)
    {
        $room = Rooms::find($id);
        $room->fill($request->all());
        $room->save();
        return redirect()->action([RoomsController::class, 'index']);
    }

    public function destroy($id)
    {
        $room = Rooms::find($id);
        $room->delete();
        return redirect()->action([RoomsController::class, 'index']);
    }
}
