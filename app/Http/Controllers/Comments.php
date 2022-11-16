<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Comments extends Controller
{
    //
    public function store(StoreCommentRequest $request)
    {
        $data =$request->except('body','_token');
        $blockWords = ["my", "comment", "is"];
        $oldComment = $request->body;
        $newComment = str_replace($blockWords, "**", $oldComment);
        $data['body']=$newComment;
        return $this->redirectTo( Comment::create($data));

    }
}
