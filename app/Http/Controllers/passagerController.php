<?php

namespace App\Http\Controllers;

use App\Models\passager;

use Illuminate\Http\Request;

class passagerController extends Controller
{
    public function passager()
    {
        $passagers = passager::orderBy("num_piece", "asc")->get();
        return view("passager", compact("passagers"));
    }
}
