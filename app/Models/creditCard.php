<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class creditCard extends Model
{
    use HasFactory;

    /**
     * 
     * @var array
     * 
     */

     private $fillable = [
        'cardNumber',
        'type',
        'expDate',
        'cryptogramme'
     ];
}
