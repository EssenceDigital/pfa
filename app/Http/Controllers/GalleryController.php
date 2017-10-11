<?php

namespace App\Http\Controllers;

use App\Image;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
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
    private function validateAndPopulate(Request $request)
    {
        // Validate or stop proccessing :)
        $this->validate($request, [
            'title' => 'max:65',
            'photo.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096'
        ]);

        // Array to store all Image models
        $images = [];
        // Iterate through the request and add Image models for each request photo
        foreach($request->file()['photo'] as $file){
            // Model for image iteration
            $image = new Image;
            // Store image with 'disk storage' and add file name to model
            $image->photo = $file->store('gallery-photos');
            // Push to array cache
            array_push($images, $image);
        }

        return $images;
    }

    /**
     * Removes the specified resource from storage.
     *
     * @return Boolean
     */
    private function doDestroy($id){
        // Find image or throw 404 :)
        $image = Image::findOrFail($id);
        // Store location on disk
        $location = $image->photo;
        // Attempt to remove image modal
        $result = $image->delete();
        // If problem then throw 500 response
        if(! $result){
            App::abort(500, 'Problem removing image');
        }
        // Remove image from disk
        $removed = unlink(public_path('uploads/' . $location));
        // If problem then throw 500 response
        if(! $removed){
            App::abort(500, 'Problem removing image');
        }

        return true;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find all posts and paginate
        $images = Image::paginate(12);

        return view('gallery.index')->withImages($images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $images = $this->validateAndPopulate($request);

        // Save each image from the array that has been validated
        foreach($images as $img){
            // Attempt to store model
            $result = $img->save();
            // Verify success on store
            if(! $result){
                App::abort(500, 'Problem storing image');
            }
        }

        // Flash success and redirect
        Session::flash('success', 'Images have been saved');
        return redirect('gallery'); 
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
        //
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
        //
    }

    /**
     * Removes one or many specified resources. 
     *
     * @param  int / string  $id - Can be a string imploded with '&' indicating multiple resources 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // If the id is an int then it's a single removal
        if(is_int($id)){
            // Call helper method to remove
            $this->doDestroy($id);
            $flashMsg = 'Image has been destroyed';
        }
        // If the id is a string then its a chain of multiple id's
        else{
            // Explode into array
            $deleteArray = explode('&', $id);
            // Run through each id
            foreach($deleteArray as $deleteId){
                $this->doDestroy($deleteId);
                $flashMsg = 'Images have been destroyed';
            }
        }
        // Flash success and redirect
        Session::flash('success', $flashMsg);
        return redirect('gallery');       
    }
    
}
