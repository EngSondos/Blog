<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Articale as ModelsArticale;
use Illuminate\Http\Request;

class Articale extends Controller
{
    use Base;
    public function list()
    {
        // $articales = ModelsArticale::with(['category','comment'])->get();
        $articales = ModelsArticale::with(['category', 'comment'])->get();
        return $this->data("200", $articales);
    }

    public function store(Request $request)
    {

       $data = ModelsArticale::create( [
            'title' => $request->title,
            'body' => $request->body,
            'image' => $this->uploadImage($request),
            'category_id' => $request->category_id,
        ]);
            return $this->data("200",[], "Inserted");

        return $this->data("404",[], "Data not found");
    }

    public function update(Request $request) {
        $data = ModelsArticale::where("id", $request->id)->update( [
            'title' => $request->title,
            'body' => $request->body,
            'image' => $this->uploadImage($request),
            'category_id' => $request->category_id,
        ]);
        return $this->data("200", [], "Updated");
    }
}
