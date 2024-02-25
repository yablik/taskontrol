<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function procesarDatos(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
    }
}   
