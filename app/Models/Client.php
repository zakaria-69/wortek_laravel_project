<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

  /**
   * *
   *
   * @var array
   * 
   */

   protected $fillable = [
    'client_id',
    'adress',
    'email',
    'password',
    'isPremium'
   ];
   protected $primaryKey= 'client_id';
}
