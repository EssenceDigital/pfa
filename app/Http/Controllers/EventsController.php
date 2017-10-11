<?php

namespace App\Http\Controllers;

use App\Event;
use App\Fight;
use Session;

use Illuminate\Http\Request;

class EventsController extends Controller
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
    private function validateAndPopulate(Request $request, Event $event)
    {
        // Validate or stop proccessing :)
        $this->validate($request, [
            'name' => 'required|max:255',
            'start_date' => 'required|date',
            'end_date' => 'date',
            'overview' => 'max:355',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        // Add request data to model
        $event->name = $request->name;
        $event->start_date = $request->start_date;
        // If no end date then make it the same as the start date
        (($request->end_date == "") ? $event->end_date = $request->start_date : $event->end_date = $request->end_date);
        $event->overview = $request->overview;
        $event->with_fights = $request->with_fights;
        // See if a photo is present
        if($request->hasFile('photo')) {
            // Store image with 'disk storage' and add file name to model
            $event->photo = $request->file('photo')->store('event-photos');
        }

        return $event;  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find all events and paginate
        $events = Event::paginate(10);

        return view('events.index')->withevents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
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
        $event = $this->validateAndPopulate($request, new Event);
        // Attempt to store model
        $result = $event->save();
        // Verify success on store
        if(! $result){
            App::abort(500, 'Problem storing event');
        }

        // Flash success and redirect. Location determined by the with_fights parameter
        Session::flash('success', 'New Event has been saved');
        return (($event->with_fights) ? redirect('events/' . $event->id . '/edit') : redirect('events'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find event or or throw 404 :)
        $event = Event::findOrFail($id);

        // Show the view with data
        return view('events.edit')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find event or or throw 404 :)
        $event = Event::findOrFail($id);

        // Show the view with data
        return view('events.edit')->withEvent($event);
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
        // Find event or or throw 404 :)
        $event = $this->validateAndPopulate($request, Event::findOrFail($id));
        // Attempt to store model
        $result = $event->save();
        // Verify success on store
        if(! $result){
            App::abort(500, 'Problem updating event');
        }

        // Flash success and redirect
        Session::flash('success', 'Event has been updated');
        return redirect('events');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find event or throw 404 :)
        $event = Event::findOrFail($id);
        // Attempt to remove event
        $result = $event->delete();
        // If problem then throw 500 response
        if(! $result){
            App::abort(500, 'Problem removing event');
        }
        // Flash success and redirect
        Session::flash('success', 'Event has been destroyed');
        return redirect('events');
    }
}
