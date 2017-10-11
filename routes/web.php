<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@getHome');
Route::get('about-us', 'PagesController@getAbout');
Route::get('classes', 'PagesController@getClasses');
Route::get('class-schedule', 'PagesController@getSchedule');
Route::get('the-team', 'PagesController@getTeam');
Route::get('videos/{category?}', 'PagesController@getVideos');
Route::get('news-and-events', 'PagesController@getEvents');
Route::get('the-gallery', 'PagesController@getGallery');
Route::get('contact-us', 'PagesController@getContact');
Route::post('send-contact', 'PagesController@send');

// REST / CRUD for Team members
Route::resource('team', 'TeamController');

// REST / CRUD for Posts
Route::resource('posts', 'PostsController');

// REST / CRUD for Events
Route::resource('events', 'EventsController');

// REST / CRUD for Fights
Route::resource('fights', 'FightsController');

// REST / CRUD for Fights
Route::resource('schedule', 'ScheduleController');

// REST / CRUD for Gallery
Route::resource('gallery', 'GalleryController');


// Auth routes
Auth::routes();
Route::get('/users', 'UsersController@index');
Route::delete('/users/{user}', 'UsersController@destroy');
Route::get('/home', 'HomeController@index');
Route::get('terms-of-use', 'HomeController@terms');
