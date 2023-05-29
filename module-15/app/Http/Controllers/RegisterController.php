<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
     function register(Request $request){
        $request->validate( [
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ] );
        // return back()->withSuccess('Registration Success....');
        return "Registration Success....";
     }
}
