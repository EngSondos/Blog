<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticaleRequest;
use App\Http\Requests\UpdateArticaleRequest;
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
    public function store(StoreArticaleRequest $request)
    {
        $data = $request->except('image',"_token");
        if ($request->hasFile('image')) {
            $newImage = Media::upload($request->file('image'), public_path('images/articales'));
            $data['image'] = $newImage;
        }
           return $this->redirectTo(ModelsArticale::create($data));

    }


    public function edit(ModelsArticale $articale)
    {

        $categories = Category::all();
        return view("articales.update", ["articale" =>compact('articale'),"categories"=>compact("categories")]);
    }
    public function update(UpdateArticaleRequest $request ,ModelsArticale $articale)
    {
        // dd($articale->id);
        $data = $request->except('image','_token','_method');
        if ($request->hasFile('image')) {
            $newImage = Media::upload($request->file('image'), public_path('images/articales'));
            $data['image'] = $newImage;
            $patholdimage = public_path('images\\articales\\' . $request->image);
            Media::delete($patholdimage);
        }
        return $this->redirectTo(ModelsArticale::where("id", $articale->id)->update($data));
    }

    public function delete(ModelsArticale $articale)
    {
        ModelsArticale::destroy($articale->id);
        $patholdimage = public_path('images/articales/' . $articale->image);
        Media::delete($patholdimage);
        return redirect()->back()->with("mes", "Deleted");
    }
    public function getbyid($id)
    {
        return  ModelsArticale::with(['category'])->find($id);
    }
}
