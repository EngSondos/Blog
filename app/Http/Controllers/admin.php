<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Admin extends Controller  

{ 
    
    public function index(){
        $admins =  DB::table("admins")->get();
        return view("nav",compact("admins"));
    } 
    
    public function create(){
        return view("Admin.create");
    }   

    public function store(Request $request){
        $request->validate([
            "name"=>"required|min:3"
        ]);

        DB::table("admins")->insert([
            "name"=>$request->name
        ]);

        return redirect("Admin/index");
    }

    public function delete($id){
        DB::table("admins")->delete($id);
        return redirect("Admin/index");
    }

    public function edit($id){
        $category =  DB::table("admins")->find($id);
        return view("Admin.update",compact("admins"));
    }

    public function update(Request $request){
        $request->validate([
            "name"=>"required|min:3"
        ]);

        DB::table("admins")->where("id",$request->id)->update([
            "name"=>$request->name
        ]);

        return redirect("Admin/index") ;
    }

} 
    