<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Topic;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function create()
    {
        $topics = Topic::all();

        return view('Posts.makepost')
            ->with([
                'topic_options' => $topics
            ]);
    }

    public function store(PostRequest $request)
    {
        $post = Auth::user()
            ->posts()
            ->create($request->post);

        return redirect()
            ->route('post.show', ['post' => $post]);
    }
}