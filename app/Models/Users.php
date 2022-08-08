<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $fillable = ["user_id", "user_name", "user_email", "user_phone", "start_date", "occupation", "user_image", "status", "password"];

    public function getUsers()
    {
        return Users::all();
    }

    public function getUser($id)
    {
        return Users::find($id);
    }
}
