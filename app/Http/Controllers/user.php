<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class user extends Controller




{
    public function login(){
        return view("login");
    }

    public function loginRequest(Request $request){
        $data = [
            "email"=>$request->email,
            "password"=>$request->password
        ];

        if(Auth::attempt($data)){
            return redirect("nav");
        }
        return redirect("login");
    }

    public function register(){
        return view("register");
    }

    public function registerRequest(Request $request){
        DB::table("admins")->insert([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>  bcrypt($request->password)
        ]);

        return redirect("login");
    }

    public function logout(){
        Auth::logout();
        return redirect("login");
    }
}