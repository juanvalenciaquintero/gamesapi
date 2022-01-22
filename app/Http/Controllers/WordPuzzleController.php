<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\palabra;

class WordPuzzleController extends Controller
{
     public function palabra()
    {
        $palabra = \DB::table('wordpuzzle_palabras')
            ->where('id',16)->get();
        return $palabra;
    }
}
