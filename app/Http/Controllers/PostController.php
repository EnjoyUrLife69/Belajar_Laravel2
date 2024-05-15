<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{   
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function menampilkan()
    {
        $post = Post::all();
        return view('posts.index', compact('post'));

    }

    public function show($id)
    {
        $post = Post::FindOrFail($id);
        return view('posts.show' , compact('post'));
    }
}
