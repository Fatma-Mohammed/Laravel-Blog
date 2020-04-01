<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    //
    public function index()
    {

        // $posts = Post::all();
        $posts = Post::paginate(5);

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show()
    {
        $request = request();
        $postId = $request->post;
        $post = Post::find($postId);
        return view('posts.show', [
            'post' => $post,

        ]);
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create', [
            'users' => $users,
        ]);
    }

    public function store()
    {

        $request = request();

        $validatedData = $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:10',
        ],[
            'title.min' => "title must be at least 3 charachters",
            'description' => "description must be at at least 10 characters"
        ]);

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route("posts.index");
    }

    public function destroy()
    {
        $request = request();
        $postId = $request->post;
        $post = Post::find($postId);
        $post->delete();

        return redirect()->route("posts.index");
    }

    public function edit()
    {
        $users = User::all();
        $request = request();
        $postId = $request->post;
        $post = Post::find($postId);
        return view('posts.edit', [
            'post' => $post,
            'users' => $users

        ]);
    }
    public function update()
    {
        $request = request();
        
        $validatedData = $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:10',
        ],[
            'title.min' => "title must be at least 3 charachters",
            'description' => "description must be at at least 10 characters"
        ]);
        Post::where("id", $request->post)->update(
            [
                'title' => $request->title,
                'description' => $request->description,
                'user_id' => $request->user
            ]
        );

        return redirect()->route('posts.index');
    }

    
}
