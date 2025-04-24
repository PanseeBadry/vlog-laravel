<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.index",["posts"=> $posts]);
       
    }
    public function create()
    {
        return view("posts.create");
    }
    public function store(StorePostRequest $request)
    {
        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'body' => $request->body
        ]);
        // Post::save( $post);
        return redirect()->route("posts.index")->with("success","Post created successfully");
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view("posts.show",["post"=> $post]);
    }
    public function edit($id)
    {

        $post = Post::find($id);
        if($post->user_id != Auth::id()){
           abort(403);
        }
        return view("posts.edit",["post"=>$post]);
    }
    public function update(StorePostRequest $request, $id) 
    {
        $post = Post::find($id);
        if($post->user_id != Auth::id()){
            abort(403);
         }
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route("posts.index")->with("success","Post updated successfully");
    }  
    public function destroy($id)
    {
        $post = Post::find($id);
        if($post->user_id != Auth::id()){
            abort(403);
         }
        $post->delete();
        return redirect()->route("posts.index")->with("success","Post deleted successfully");
    }
    
}
