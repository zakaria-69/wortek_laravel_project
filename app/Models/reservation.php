<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    /**
    * *
    *
    *@var array //annotation phpdoc fourni une doc pour les ide et dautre outils de dev statique.elle indique le type de la propriété fillable qui est de type tableau
    * 
    */

    protected $fillable = [
       'reservation_id',
       'startDate',
       'endDate',
       'isAvailable',
       'client_id'
    ];

    public function Client(){
        return $this->belongsTo(Client::class,'client_id');
    }
}
