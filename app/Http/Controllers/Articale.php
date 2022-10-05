<?php

namespace App\Http\Controllers;

use App\Media\Media;
use App\Models\Articale as ModelsArticale;
use App\Models\Category;
use Illuminate\Http\Request;

class Articale extends Controller
{
    public function list(){
      $articales= ModelsArticale::with(['category'])->get();
      return view("articales.index",compact("articales"));
    }
    public function create()
    {
        return view('articales.create');
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'category_id' => "required|integer"
        ]);
        if ($validation) {
            $article = ModelsArticale::create([
                "title" => $request->title,
                "body" => $request->body,
                "image" => " ",
                "category_id" => $request->category_id
            ]);
            return redirect()->back()->with(["message" => "Article Created"]);
        } else {
            return redirect()->back()->with(["error" => "Article Not Created"]);
        }
    }

    public function edit($id)
    {
        $articale=$this->getbyid($id);
        return view("articales.update", compact('articale'));
    }
    public function update(Request $request)
    {
        if($request->has('image')){
            $newImage = Media::upload($request->file('image'),public_path('images/prodcuts'));
            $data['image']=$newImage;
            $oldimage =ModelsArticale::select('image')->where('id',"=",$request->id)->get();
            $patholdimage= public_path('images/articales/'.$oldimage);
            Media::delete($patholdimage);
            // dd($request);
        ModelsArticale::where("id", $request->id)->update([
            "title" => $request->title,
            "body" => $request->body,
            "image" => " ",
            "category_id" => $request->category_id
        ]);
        return redirect('articale/create')->with("message","updated");
    }
}
    public function delete($id)
    {
         ModelsArticale::destroy($id);
         return redirect()->back()->with("message","Deleted");
    }
    public function getbyid($id){
 return  ModelsArticale::with(['category'])->find($id);

    }
}
