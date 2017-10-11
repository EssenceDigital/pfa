<?php

namespace App\Http\Controllers;

use App\Team;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Intervention\Image\ImageManagerStatic as Image;

class TeamController extends Controller
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
    private function validateAndPopulate(Request $request, Team $member)
    {
        // Validate or stop proccessing :)
        $this->validate($request, [
            'first' => 'required|max:25',
            'last' => 'required|max:25',
            'accolades' => 'max:300',
            'description' => 'required|max:650',
            'facebook' => 'max:255',
            'instagram' => 'max:255',
            'twitter' => 'max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:4096'
        ]);

        // Convert instagram handle into URL
        if(substr($request->instagram, 0, 1) == '@'){
            $instagramLink = substr($request->instagram, 1, strlen($request->instagram));
            $instagramLink = 'https://www.instagram.com/' . $instagramLink;
        } else{
            $instagramLink = $request->instagram;
        }

        // Convert twitter handle into URL
        if(substr($request->twitter, 0, 1) == '@'){
            $twitterLink = substr($request->twitter, 1, strlen($request->twitter));
            $twitterLink = 'https://www.twitter.com/' . $twitterLink;
        } else{
            $twitterLink = $request->twitter;
        }

        // Add request data to model
        $member->first = $request->first;
        $member->last = $request->last;
        $member->description = $request->description;
        $member->facebook = $request->facebook;
        $member->instagram = $instagramLink;
        $member->twitter = $twitterLink;
        // Deal with accolades
        if(! empty($request->accolades[0])){
            $member->accolades = implode('-,-', $request->accolades);
        } else{
            $member->accolades = null;
        }
        // See if an avatar photo is present
        if($request->hasFile('avatar')) {
            // Store image with 'disk storage' and add file name to model
            $member->avatar = $request->file('avatar')->store('avatars');

            $img = Image::make(asset('uploads/' . $member->avatar))->fit(750)->greyscale();
            $img->save(public_path('uploads/' . $member->avatar));
        }

        return $member;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find all team members and paginate
        $members = Team::paginate(10);

        return view('team.index')->withMembers($members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');
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
        $member = $this->validateAndPopulate($request, new Team);

        // Attempt to store model
        $result = $member->save();
        // Verify success on store
        if(! $result){
            App::abort(500, 'Problem storing team member');
        }

        // Flash success and redirect
        Session::flash('success', 'Team member has been saved');
        return redirect('team');
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
        // Find team member or throw 404 :)
        $member = Team::findOrFail($id);

        // Convert link to handle
        if($member->instagram != ''){
            $instagram = substr($member->instagram, 26, strlen($member->instagram));
            $instagram = '@' . $instagram;
            $member->instagram = $instagram;
        }

        // Convert link to handle
        if($member->twitter != ''){
            $twitter = substr($member->twitter, 24, strlen($member->twitter));
            $twitter = '@' . $twitter;
            $member->twitter = $twitter;
        }

        // Show the view with data
        return view('team.edit')->withMember($member);
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
        // Find team member or throw 404 :)
        $member = $this->validateAndPopulate($request, Team::findOrFail($id));

        // Attempt to store model
        $result = $member->save();
        // Verify success on store
        if(! $result){
            App::abort(500, 'Problem updating team member');
        }

        // Flash success and redirect
        Session::flash('success', 'Team member has been updated');
        return redirect('team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find team member or throw 404 :)
        $member = Team::findOrFail($id);
        // Attempt to remove team member
        $result = $member->delete();
        // If problem then throw 500 response
        if(! $result){
            App::abort(500, 'Problem removing team member');
        }
        // Flash success and redirect
        Session::flash('success', 'Team member has been destroyed');
        return redirect('team');
    }

}
