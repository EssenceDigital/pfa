<?php

namespace App\Http\Controllers;

use App\Schedule;
use Session;

use Illuminate\Http\Request;

class ScheduleController extends Controller
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
    private function validateAndPopulate(Request $request, Schedule $schedule)
    {
        // Validate or stop proccessing :)
        $this->validate($request, [
            'class' => 'required|max:65',
            'color' => 'required|max:15',
            'start_time' => 'required|date',
            'end_time' => 'required|date'
        ]);

        // Add request data to model
        $schedule->class = $request->class;
        $schedule->color = $request->color;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;

        return $schedule;  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find the schedule
        $schedule = Schedule::all();

        // Find all unique class names and add them to an array
        $classNames = array();
        $classColors = array();
        foreach($schedule as $class){
            if(! array_key_exists($class->class, $classNames)){
                $classNames[$class->class] = $class->class;
                $classColors[$class->class] = $class->color;
            } else{
                continue;
            }
        }

        $possibleColors = ['#b40001' => 'Red', '#18448d' => 'Blue', '#3e8a06' => 'Green', '#e0cb18' => 'Yellow', '#111' => 'Black', '#8e14b6' => 'Purple', '#dd820d' => 'Orange', '#969696' => 'Grey', '#1bc4b2' => 'Teal', '#b4008d' => 'Pink', '#7ae419' => 'Lime Green', '#3387f1' => 'Light Blue', '#4a0a0a' => 'Blood Red'];

        // Sorting
        ksort($classNames);
        asort($possibleColors);

        return view('schedule.index')
            ->with('schedule', $schedule)
            ->with('possibleColors', $possibleColors)
            ->with('classNames', $classNames)
            ->with('classColors', $classColors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $schedule = $this->validateAndPopulate($request, new Schedule);

        // Attempt to store model
        $result = $schedule->save();
        // Verify success on store
        if(! $result){
            \App::abort(500, 'Problem adding class to schedule');
        }

        // Flash success and redirect
        Session::flash('success', 'Class has been added to schedule');
        return redirect('schedule');  

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
        // Find schedule event or or throw 404 :)
        $schedule = Schedule::find($id);
        // If no schedule then return failed response
        if($schedule == null){
            \App::abort(500, 'Problem updating class');;
        }
        // Validate and populate schedule with request
        $schedule = $this->validateAndPopulate($request, $schedule);

        // Attempt to store model
        $result = $schedule->save();
        // Verify success on store
        if(! $result){
            \App::abort(500, 'Problem updating class');
        }

        // Flash success and redirect
        Session::flash('success', 'Class has been updated');
        return redirect('schedule');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find schedule event
        $schedule = Schedule::find($id);
        // If no schedule then return failed response
        if($schedule == null){
            \App::abort(500, 'Problem removing class from schedule');
        }

        // Attempt to remove schedule event
        $result = $schedule->delete();
        // If problem then throw 500 response
        if(! $result){
            \App::abort(500, 'Problem removing class from schedule');
        }

        // Flash success and redirect
        Session::flash('success', 'Class has been removed from schedule');
        return redirect('schedule');  
    }
}
