<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $table = "rooms";

    protected $fillable = ["room_number", "bed_type", "description", "offer", "price", "discount", "cancellation", "amenities"];

    public $timestamps = false;
    
    protected $primaryKey = "room_id";



}
