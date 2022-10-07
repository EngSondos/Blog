<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Comments extends Controller
{
    //

    public function show()
    {
        return view("NewComment");
    }
    public function store(Request $request)
    {
        $blockWords = ["my", "comment", "is"];

        $oldComment = $request->body;
        $newComment = str_replace($blockWords, "**", $oldComment);


            $insert = Comment::create(["guest_name" => $request->guest_name, "body" => $newComment, "articale_id" => $request->articale_id]);
            return redirect()->back()->with("message","Comment Send");
    }
}
