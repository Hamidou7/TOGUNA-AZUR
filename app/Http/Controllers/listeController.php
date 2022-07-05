<?php

namespace App\Http\Controllers;

use App\Models\liste;
use Illuminate\Http\Request;

class listeController extends Controller
{
    public function liste()
    {
        $listes = liste::orderBy("destination", "asc")->get();
        return view("liste", compact("listes"));
    }
}
