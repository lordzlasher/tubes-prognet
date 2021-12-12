<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    
    function NamaTamu(){
        return $this->belongsTo(Tamu::class, 'tamu_id');
}

    function NamaKamar(){
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }
}
