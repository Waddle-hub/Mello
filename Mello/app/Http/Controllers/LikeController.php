<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class LikeController extends Controller
{
    public function dislike($user_id, $post_id){
        $post = Post::find($post_id);
        $update = false;

        $post = Post::find($post_id);
        if(!$post){
            return redirect()->route('posts.show', ['post' => $id])->with('error', 'Unable to dislike');
        }

        $user = auth()->user()->$user_id;
        $like = $user->likes()->where('post_id', $post_id)->first();

        if($like){
            $like->delete();
        } else {
            $like = new Like();
            $like->like = false;
            $like->user_id = $user_id;
            $like->post_id = $post_id;
            return redirect()->route('posts.show', ['post' => $id])->with('success', 'Post disiked');

        }

        return redirect()->route('posts.show', ['post' => $id])->with('error', 'Other errors');

    }

    public function like($user_id, $post_id){
        $update = false;

        $post = Post::find($post_id);
        if(!$post){
            return redirect()->route('posts.show', ['post' => $id])->with('error', 'Unable to like');
        }

        $user = auth()->user()->$user_id;
        $like = $user->likes()->where('post_id', $post_id)->first();

        if($like){
            $like->delete();
        } else {
            $like = new Like();
            $like->like = true;
            $like->user_id = $user_id;
            $like->post_id = $post_id;
            return redirect()->route('posts.show', ['post' => $id])->with('success', 'Post Liked');

        }

        return redirect()->route('posts.show', ['post' => $id])->with('error', 'Other errors');
        
    }
}
