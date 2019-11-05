<?php

namespace App\Http\Controllers;


use App\Posts;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::paginate(1);
        return view('blogpost', ['posts' => $posts]);
    }
}
