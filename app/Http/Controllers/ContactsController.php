<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    protected $contacts;

    public function __construct(Contacts $contacts)
    {
        $this->contacts = $contacts;
    }

    public function index()
    {
        $contacts = $this->contacts->getContacts();
        return view('contacts.lista', ['contacts' => $contacts]);
    }
    public function create()
    {
        return view('contacts.crear');
    }

    public function store(Request $request)
    {
        $contacts = new Contacts ($request->all());
        $contacts->save();
        return redirect()->action([ContactsController::class, 'index']);
    }

    public function show($id)
    {
        $contact = $this->contacts->getContact($id);
        return view('contacts.ver', ['contact' => $contact]);
    }

    public function edit($id)
    {
        $contact = $this->contacts->getContact($id);
        return view('contacts.editar', ['contact' => $contact]);
    }

    public function update(Request $request, $id)
    {
        $contact = Contacts::find($id);
        $contact->fill($request->all());
        $contact->save();
        return redirect()->action([ContactsController::class, 'index']);
    }

    public function destroy($id)
    {
        $contact = Contacts::find($id);
        $contact->delete();
        return redirect()->action([ContactsController::class, 'index']);
    }
}
