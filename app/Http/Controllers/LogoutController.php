<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function Logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect()->route('Login');
        }
        return redirect()->route('Login');

    }
}
