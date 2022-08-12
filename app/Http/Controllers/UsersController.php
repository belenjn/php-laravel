<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    protected $users;

    public function index()
    {
        $user = Users::find($id);
        return view('users.lista', ['users' => $users]);
    }

    public function create()
    {
        return view('users.crear');
    }

    public function store(Request $request)
    {
        $user = new Users ($request->all());
        $user->save();
        return redirect()->action([UsersController::class, 'index']);
    }

    public function show($id)
    {
        $user = Users::find($id);
        return view('users.ver', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = Users::find($id);
        return view('users.editar', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = Users::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect()->action([UsersController::class, 'index']);
    }

    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();
        return redirect()->action([UsersController::class, 'index']);
    }
}
