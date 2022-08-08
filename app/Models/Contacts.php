<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $table = "contacts";

    protected $fillable = ["contact_id", "contact_name", "contact_email", "contact_phone", "contact_date", "subject", "comment", "viewed", "archived"];

    public function getContacts()
    {
        return Contacts::all();
    }

    public function getContact($id)
    {
        return Contacts::find($id);
    }
}
