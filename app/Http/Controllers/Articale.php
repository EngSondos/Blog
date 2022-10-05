<?php

namespace App\Http\Controllers;

use App\Models\Articale as ModelsArticale;
use Illuminate\Http\Request;

class Articale extends Controller
{
    public function create(){
        return view('articales.create');
    }
    public function store(Request $request){

        $article = ModelsArticale::create([
            "title"=>$request->title,
            "body"=>$request->body,
            "image"=>NULL,
            "category_id"=>$request->category_id
        ]);
    }
}
