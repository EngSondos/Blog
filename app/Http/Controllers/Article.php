<?php

namespace App\Http\Controllers;

use App\Models\Articale;
use Illuminate\Http\Request;

class Article extends Controller
{
    public function create(){
        return view('articales.create');
    }
    // public function store(Request $request){

    //     $article=
    // }
}
