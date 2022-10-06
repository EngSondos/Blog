<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Comments extends Controller
{
    //
    public function create()
    {
        return view("createComment");
    }
    public function show()
    {
        return view("NewComment");
    }
    public function store(Request $request)
    {
        $blockWords = ["my", "comment", "is"];
        $name = $request->name;

        $oldComment = $request->body;
        $newComment = str_replace($blockWords, "**", $oldComment);
        // dd($newComment);


            $insert = Comment::create(["guest_name" => $name, "body" => $newComment, "articale_id" => 1]);
        // echo $currentComment;
    }
}
