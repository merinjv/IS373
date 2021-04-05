<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($id)
    {
        return view('post',[
            'post'=>Post::findorfail($id)
        ]);
    }
    public function index()
    {
        return view('posts',[
            'post'=>Post::all()
        ]);
    }
}
