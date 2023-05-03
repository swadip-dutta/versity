<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function front(){
        return view('auth.login');
    }

    // function Register(){
    //     return view('frontend.register');
    // }
}
