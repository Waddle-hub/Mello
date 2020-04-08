<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    function index()
    {
        $posts = Post::all();

        return view("Layout.Master")
            ->with([
                'posts' => $posts
            ]);
    }
}
