<?php

namespace App\Http\Controllers;

use App\Post;
use Session;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Validates request data and then adds it to a model. Helper method used by store() and update()
     *
     * @return App\Model
     */
    private function validateAndPopulate(Request $request, Post $post)
    {
        // Validate or stop proccessing :)
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required|max:1500',
            'category' => 'required|max:25',
            'video' => 'required|max:255'
        ]);

        // Add request data to model
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category = $request->category;
        $post->video = str_replace('watch?v=', 'embed/', $request->video);

        // Create slug - Start by lower case everything
        $slug = strtolower($post->title);
        //Make alphanumeric (removes all other characters)
        $slug = preg_replace("/[^a-z0-9_\s-]/", "", $slug);
        //Clean up multiple dashes or whitespaces
        $slug = preg_replace("/[\s-]+/", " ", $slug);
        //Convert whitespaces and underscore to dash
        $slug = preg_replace("/[\s_]/", "-", $slug);
        // Add created slug to model
        $post->slug = $slug;

        return $post;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find all posts and paginate
        $posts = Post::paginate(10);

        return view('posts.index')->withPosts($posts);
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
        // Validate and populate the request
        $post = $this->validateAndPopulate($request, new Post);

        // Attempt to store model
        $result = $post->save();
        // Verify success on store
        if(! $result){
            App::abort(500, 'Problem storing post');
        }

        // Flash success and redirect
        Session::flash('success', 'New post has been saved');
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find post or or throw 404 :)
        $post = Post::findOrFail($id);

        // Show the view with data
        return view('posts.edit')->withPost($post);
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
        // Validate and populate the request
        // Find post or or throw 404 :)
        $post = $this->validateAndPopulate($request, Post::findOrFail($id));

        // Attempt to store model
        $result = $post->save();
        // Verify success on store
        if(! $result){
            App::abort(500, 'Problem updating post');
        }

        // Flash success and redirect
        Session::flash('success', 'Post has been updated');
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find post or throw 404 :)
        $post = Post::findOrFail($id);
        // Attempt to remove post
        $result = $post->delete();
        // If problem then throw 500 response
        if(! $result){
            App::abort(500, 'Problem removing post');
        }
        // Flash success and redirect
        Session::flash('success', 'Post has been destroyed');
        return redirect('posts');
    }
}
