<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refund extends Model
{
    use HasFactory;

    /**
     * 
     * 
     * @var array
     * 
     */

     private $fillable = [
        'refund_id',
        'date',
        'amount',
        'reservation_id'
        
     ];
}

