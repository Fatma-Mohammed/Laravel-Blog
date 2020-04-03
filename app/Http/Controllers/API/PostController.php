<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;

class PostController extends Controller
{
    //
    public function index()
    {
        return PostResource::collection(
            Post::paginate(2)
        );
    }

    public function show(){
        $postId = request()->post;
        $post = Post::find($postId);
        return new PostResource($post);
    }

    public function store(StoreBlogPost $request){
        $validatedData = $request->validated();

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);
    }
}
