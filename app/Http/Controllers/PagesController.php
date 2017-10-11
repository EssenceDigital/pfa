<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Team;
use App\Post;
use App\Event;
use App\Image;
use App\Mail\SendContact;

use Mail;
use Session;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display the index page
     *
     * @return \Illuminate\Http\Response
     */
    public function getHome()
    {
        return view('index');
    }

    /**
     * Display the about page
     *
     * @return \Illuminate\Http\Response
     */
    public function getAbout()
    {
        // Find the whole gallery and paginate
        $gallery = Image::paginate(8);

        return view('pages.about')->withGallery($gallery);
    }

    /**
     * Display the classes page
     *
     * @return \Illuminate\Http\Response
     */
    public function getClasses()
    {
        return view('pages.classes');
    }

    /**
     * Display the schedule page
     *
     * @return \Illuminate\Http\Response
     */
    public function getSchedule()
    {
        // Find the schedule
        $schedule = Schedule::all();

        return view('pages.schedule')->withSchedule($schedule);
    }

    /**
     * Display the team page
     *
     * @return \Illuminate\Http\Response
     */
    public function getTeam()
    {
        // Find team members
        $team = Team::all();

        return view('pages.team')->withTeam($team);
    }

    /**
     * Display the videos page
     *
     * @return \Illuminate\Http\Response
     */
    public function getVideos($category = null)
    {
        // Find all posts and paginate
        if($category != null) {
            $posts = Post::where('category', $category)->paginate(3);
        } else{
            $posts = Post::paginate(3);
        }

        return view('pages.videos')->withPosts($posts);
    }

    /**
     * Display the events page
     *
     * @return \Illuminate\Http\Response
     */
    public function getEvents()
    {
        // Find all events and paginate
        $events = Event::orderBy('start_date', 'desc')->paginate(10);

        return view('pages.events')->withEvents($events);
    }

    /**
     * Display the events page
     *
     * @return \Illuminate\Http\Response
     */
    public function getGallery()
    {
        // Find the whole gallery and paginate
        $gallery = Image::paginate(20);

        return view('pages.gallery')->withGallery($gallery);
    }

    /**
     * Display the events page
     *
     * @return \Illuminate\Http\Response
     */
    public function getContact()
    {
        // Set up 'antibot' style 'captcha' for contact form
        $numberConversion = array(
            0 => 'zero', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six', 7 => 'seven', 8 =>'eight', 9 => 'nine', 10 => 'ten'
        );
        // Produce random numbers
        $numberOne = rand( 0, 6 );
        $numberTwo = rand( 0, 6 );
        // Add to the session for usage later
        session(['antibotquestion' => 'What is ' . $numberConversion[$numberOne] . ' added to ' . $numberConversion[$numberTwo] . ' *', 'antibotanswer' => $numberOne + $numberTwo]);

        return view('pages.contact');
    }

    /**
     * Sends the contact form email
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        // Validate or stop proccessing :)
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required|max:25',
            'message' => 'required|max:300',
            'captcha' => 'required'
        ]);

        if(session('antibotanswer') != $request->captcha){
            Session::flash('error', 'The captcha math question was wrong');
            return redirect('contact-us');    
        }

        Mail::to('bradthebrickwall@hotmail.com')->send(new SendContact(
            [
                'from' => $request->email,
                'name' => $request->name,
                'message' => $request->message
            ]
        ));

        Session::flash('success', 'Your message has been sent! ');
        return redirect('contact-us');
        
    }


}
