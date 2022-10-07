<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin extends Controller
{
    public function login() {
        return view("login");
    }

    public function loginRequest(Request $request) {
        $data= [
            'email' => $request->email,
            'password' => $request->password
        ];
    //    dd($data);
        // return redirect('articale/list');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return view('articale.list');
        }
        return redirect("login");
    }

}
