<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $table = "bookings";

    protected $fillable = ["guest_name", "order_date", "checkin", "checkout", "special_request", "room_id", "status"];

    public $timestamps = false;

    protected $primaryKey = "booking_id";


}
