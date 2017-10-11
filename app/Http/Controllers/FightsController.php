<?php

namespace App\Http\Controllers;

use App\Fight;
use App\Event;
use Session;

use Illuminate\Http\Request;

class FightsController extends Controller
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
    private function validateAndPopulate(Request $request, Fight $fight)
    {
        // Validate or stop proccessing :)
        $this->validate($request, [
            'fighter_a' => 'required|max:125',
            'fighter_a_record' => 'required|max:25',
            'fighter_a_gym' => 'required|max:35',
            'fighter_b' => 'required|max:125',
            'fighter_b_record' => 'required|max:25',
            'fighter_b_gym' => 'required|max:35',
            'weight' => 'required|max:15',
            'result' => 'max:255',
            'note' => 'max:255'
        ]);

        // Add request data to model
        $fight->fighter_a = $request->fighter_a;
        $fight->fighter_a_record = $request->fighter_a_record;
        $fight->fighter_a_gym = $request->fighter_a_gym;
        $fight->fighter_b = $request->fighter_b;
        $fight->fighter_b_record = $request->fighter_b_record;
        $fight->fighter_b_gym = $request->fighter_b_gym;
        $fight->weight = $request->weight;
        $fight->result = $request->result;
        $fight->note = $request->note;

        return $fight;  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fights.create');
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
        $fight = $this->validateAndPopulate($request, new Fight);
        // retrieve the parent event for the fight
        $event = Event::findOrFail($request->event_id);
        // Attempt to store fight model via parent event model
        $result = $event->fights()->save($fight);
        // Verify success on store
        if(! $result){
            App::abort(500, 'Problem storing fight');
        }

        // Flash success and redirect
        Session::flash('success', 'Fight has been saved to this event');
        return redirect('events/' . $event->id . '/edit'); 
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
        // Find fight or or throw 404 :)
        $fight = Fight::findOrFail($id);

        // Show the view with data
        return view('fights.edit')->withFight($fight);
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
        $fight = $this->validateAndPopulate($request, Fight::findOrFail($id));
        // retrieve the parent event for the fight
        $event = Event::findOrFail($request->event_id);

        // Attempt to store fight model via parent event model
        $result = $event->fights()->save($fight);
        // Verify success on store
        if(! $result){
            App::abort(500, 'Problem updating fight');
        }

        // Flash success and redirect
        Session::flash('success', 'Fight has been updated');
        return redirect('events/' . $event->id . '/edit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find fight or throw 404 :)
        $fight = Fight::findOrFail($id);
        // Get event id from fight
        $event_id = $fight->event_id;
        // Attempt to remove fight
        $result = $fight->delete();
        // If problem then throw 500 response
        if(! $result){
            App::abort(500, 'Problem removing fight');
        }
        // Flash success and redirect to parent event edit view
        Session::flash('success', 'Fight has been destroyed');
        return redirect('events/' . $event_id . '/edit');
    }
}
