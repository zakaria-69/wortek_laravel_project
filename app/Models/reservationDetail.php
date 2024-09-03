<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservationDetail extends Model
{
    use HasFactory;

    /**
     * *
     * 
     * @var array
     */

     private $fillable = [
        'reservationDetail_id',
        'localType',
        'spaceLocation',
        'quantity',
        'reservation_id'
     ];
}
