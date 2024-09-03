<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    /**
     * 
     * @var array
     * 
     */

     private $fillabe = [
        'payment_id',
        'isPremium',
        'price',
        'reservation_id',
        'cardNumber'
     ];
}
