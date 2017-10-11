<?php

namespace App\Http\Controllers;

use App\User;
Use Session;
use Auth;

use Illuminate\Http\Request;

class UsersController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find all users and paginate
        $users = User::paginate(10);

        return view('users.index')->withUsers($users);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->id != $id){
            // Find user or throw 404 :)
            $user = User::findOrFail($id);
            // Attempt to remove user
            $result = $user->delete();
            // If problem then throw 500 response
            if(! $result){
                App::abort(500, 'Problem removing user');
            }
            // Flash success and redirect
            Session::flash('success', 'User has been destroyed');
            return redirect('/users');

        } else{
            // Flash success and redirect
            Session::flash('error', 'You may not self destruct');
            return redirect('/users');
        }

    }
}
