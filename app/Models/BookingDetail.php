<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;

    function Booking(){
        return $this->belongsTo(Booking::class);
}
    function Kamar(){
        return $this->belongsTo(Kamar::class);
}
    function tamu(){
        return $this->belongsTo(Tamu::class);
}
}
