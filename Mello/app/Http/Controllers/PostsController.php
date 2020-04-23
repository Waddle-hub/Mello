<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        //$post = Post::where('title', 'Post Two')->get();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'Body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image')){
            //get filename with extentsion
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just the filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just the extentsion
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename yo store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

        }else{

            $fileNameToStore = 'noimage.png';

        }
        //Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->Body = $request->input('Body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save(); 
        
        //Here we are using the messages file success message !
        return redirect()->route('posts.show', ['post' => $post->id])->with('success', 'Post created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorised Page');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'Body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image')){
            //get filename with extentsion
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just the filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just the extentsion
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename yo store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

        }

        //Find Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->Body = $request->input('Body');
        if($request->hasFile('cover_image')){
            Storage::delete('public/cover_images/' . $post->cover_image);
            $post->cover_image = $fileNameToStore;
        }
        $post->save();
        
        //Here we are using the messages file success message !
        return redirect()->route('posts.show', ['post' => $id])->with('success', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorised Page');
        }
        if($post->cover_image != 'noimage.png'){
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed !');
    }
}
