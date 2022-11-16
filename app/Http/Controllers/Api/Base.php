<?php

namespace App\Http\Controllers\Api;

use App\Media\Media;
use App\Models\Articale;

trait Base{
    public function data($status ,$data,$msg=""){
        return response()->json(["status" => $status, "data" => $data, "msg" => $msg]);
    }
    public function uploadImage($request) {
        if ($request->has('image')) {
            $newImage = Media::upload($request->file('image'), public_path('images/articales'));
            $data['image'] = $newImage;
            $oldimage = Articale::select('image')->where('id', "=", $request->id)->get();
            $patholdimage = public_path('images/articales/' . $oldimage);
            Media::delete($patholdimage);
            return $newImage;
        }
        return false;
    }
}
