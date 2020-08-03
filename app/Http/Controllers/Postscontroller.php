<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class Postscontroller extends Controller 
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::all();
        // return Post::where('title','Post One')->get();
        //$posts = DB::select('SElECT * FROM posts');
        //$posts = Post::orderBy('title', 'asc')->get();

       //$posts = Post::orderBy('title', 'asc')->paginate();
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
         'body' => 'required',
     ]);

    // Create Post
    $post = new Post;
    $post->title = $request->input('title');
    $post->body = $request->input('body');
    $post->save();

return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts.show')->with('post', $posts);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('posts.edit')->with('post', $posts);

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
            'body' => 'required',
        ]);
   
       // Create Post
       $post =Post::find($id);
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->save();
   
   return redirect('/posts')->with('success', 'Post Updated');
       }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Removed');
    }
}

