<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(){
        return view("login");

    }
    public  function LoginRequest(LoginRequest $request){
        $user = User::where("email","=" ,$request->email)->first();
        if(isset($user) && $request->password == $user->password){
            $request->session()->put("loginId",$user->id);
            return redirect()->route('articale.list');
        }
        return back()->with('Fail','Your Email Or Password Is Invalid');

    }
}
