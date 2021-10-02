<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('home', compact('posts'));
        // $posts = Post::all();
    }

    public function showbycategory()
    {
    }
}
