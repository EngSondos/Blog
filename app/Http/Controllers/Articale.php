<?php

namespace App\Http\Controllers;

use App\Media\Media;
use App\Models\Articale as ModelsArticale;
use App\Models\Category;
use Illuminate\Http\Request;

class Articale extends Controller
{
    public function list()
    {
        $articales = ModelsArticale::with(['category','comment'])->get();
        return view("articales.index", compact("articales"));
    }
    public function create()
    {
        $categories = Category::all();
    //   dd($categories);
        return view('articales.create',compact("categories"));
    }
    public function store(Request $request)
    {
        // dd($request->image);
        if ($request->has('image')) {
            $newImage = Media::upload($request->file('image'), public_path('images/articales'));
            $data['image'] = $newImage;
            $oldimage = ModelsArticale::select('image')->where('id', "=", $request->id)->get();
            $patholdimage = public_path('images/articales/' . $oldimage);
            Media::delete($patholdimage);
        }
        $validation = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => "required"
        ]);
        if ($validation) {
            ModelsArticale::create([
                "title" => $request->title,
                "body" => $request->body,
                "image" => $newImage,
                "category_id" => $request->category_id
            ]);
            return redirect()->back()->with(["message" => "Article Created"]);
        } else {
            return redirect()->back()->with(["error" => "Article Not Created"]);
        }
    }


    public function edit($id)
    {
        $articale = $this->getbyid($id);
        $categories = Category::all();

        return view("articales.update", ["articale" =>compact('articale'),"categories"=>compact("categories")]);
    }
    public function update(Request $request)
    {
        // dd($request);
        if ($request->has('image')) {
            $newImage = Media::upload($request->file('image'), public_path('images/articales'));
            $data['image'] = $newImage;
            $oldimage = ModelsArticale::select('image')->where('id', "=", $request->id)->get();
            $patholdimage = public_path('images/articales/' . $oldimage);
            Media::delete($patholdimage);
        }
        // echo($newImage);
            ModelsArticale::where("id", $request->id)->update([
                "title" => $request->title,
                "body" => $request->body,
                "image" => $newImage,
                "category_id" => $request->category_id
            ]);
            return redirect('articale/list')->with("message", "updated");
        }

    public function delete($id)
    {
        ModelsArticale::destroy($id);
        return redirect()->back()->with("message", "Deleted");
    }
    public function getbyid($id)
    {
        return  ModelsArticale::with(['category'])->find($id);
    }
}
