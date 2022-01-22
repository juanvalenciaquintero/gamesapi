<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class palabra extends Model
{
   protected $fillable = ['palabra','longitud'];

    protected $table = 'wordpuzzle_palabras';
}
