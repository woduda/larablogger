<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest('date')->paginate(3);

        return view('pages.posts')->with('posts', $posts);    
    }

    public function show(Post $post)
    {
        return view('pages.post')->with('post', $post);
    }
}
