<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function tampil() 
    {
        $post = Post::all();
        return view('halaman2_post', compact('post'));
    }
}
