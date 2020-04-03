<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return PostResource::collection(
            Post::all()
        );
    }

    public function show(){
        $postId = request()->post;
        $post = Post::find($postId);
        return new PostResource($post);
    }
}
