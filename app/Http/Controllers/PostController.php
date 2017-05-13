<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','asc')->get();
        return view('posts/index',compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts/show',compact('post'));
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        //Create a new post
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');

        // save into database
        $post->save();

        // Ridirect to homepage

        return redirect('/');

    }
}
