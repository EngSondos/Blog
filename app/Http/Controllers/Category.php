<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Category extends Controller
{
    public function index() {
        $Category = DB::table("categories")->get();
        return view("Category.List", compact("Category"));
    }
    public function create() {
        return view("Category.Create");
    }
    public function store(Request $request) {
        $request->validate([
            "name" => "required"
        ]);
        DB::table("categories")->insert([
            "name"=>$request->name,
        ]);
        return redirect("Category/index");
    }
    public function delete($id) {
        DB::table("categories")->delete($id);
        return redirect("Category/index");
    }
    public function edit($id) {
        $Category = DB::table("categories")->find($id);
        return view("Category.Update", compact("Category"));
    }
    public function update(Request $request) {
        $request->validate([
            "name" => "required"
        ]);
        DB::table("categories")->where("id", $request->id)->update([
            "name"=>$request->name,
        ]);
        return redirect("Category/index");
    }
}
