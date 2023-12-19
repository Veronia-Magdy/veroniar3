<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   private $columns = ['postTitle','description','author','published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return view('posts' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $posts = new Post();
       // $posts->postTitle = $request->postTitle;
       // $posts->description = $request->description;
       // $posts->author = $request->author;
       // if(isset($request->published)){
        //$posts->published = 1;
      // }else{
       // $posts->published = 0;
       //}

        //$posts->save();
        //return "Data Added Successfully";
       // $data = $request->only($this->columns);
       $data= $request->validate([
        'postTitle' => 'required|string',
        'description' => 'required|string',
        'author' => 'required|string'
        ]);
        $data["published"] = isset($request->published);
        Post::create($data);
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Posts = Post::findOrFail($id);
        return view('showPost', compact('Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('updatePost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data["published"] = isset($request->published);
        Post::where('id',$id)->update($data);
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id',$id)->delete();
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('trashedPost',compact('posts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function forceDelete(string $id)
    {
        Post::where('id',$id)->forceDelete();
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function restore(string $id)
    {
        Post::where('id',$id)->restore();
        return redirect('posts');
    }

}