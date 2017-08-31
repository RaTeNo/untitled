<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        //dd($posts);
        return view('posts', ['posts'=>$posts]);
    }
}
