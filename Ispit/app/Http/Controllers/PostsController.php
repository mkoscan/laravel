<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use App\User;
use App\Category;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $posts = Post::orderBy('updated_at', 'desc')->paginate(5);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $categories = Category::all();
        return view ('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id' => 'required|numeric'
        ));

        $post = new Post;

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->body = $request->body;

        $post->save();

        Session::flash('success', 'The blog post was successfully saved!');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $post = Post::find($id);
        return view ('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
         $post = Post::find($id);

        return view('posts.edit', compact('post', 'categories'));
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
        $post = Post::find($id);
        if($request->input('slug') == $post->slug){

            $this->validate($request, array(
            'title' => 'required|max:255',
            'category_id' =>'required|integer',
            'body' => 'required'
        ));
        } else{
       $this->validate($request, array(
            'title' => 'required|max:255',
            'slug'=> 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' =>'required|integer',
            'body' => 'required'
        ));
   }

       $post = Post::find($id);
       $post->title = $request->input('title');
       $post->slug = $request->input('slug');
       $post->category_id = $request->input('category_id');
       $post->body = $request->input('body');

       $post->save();

       Session::flash('success', 'This post was successfully saved.');

       return redirect()->route('posts.show', $post->id);
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

        $post->delete();


        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('posts.index');
    }
}
