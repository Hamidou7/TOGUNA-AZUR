<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }
}
