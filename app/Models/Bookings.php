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


    public function getBookings()
    {
        return Bookings::all();
    }

    protected $primaryKey = 'booking_id';


    public function getBooking($id)
    {
        return Bookings::find($id);
    }
}

