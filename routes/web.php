<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new-here', function () {
    return view('newhere');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/leaders', function () {
    return view('leaders');
});
Route::get('/announcements', function () {
    return view('announcements');
});
Route::get('/readings', function () {
    return view('readings');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/support', function () {
    return view('support');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/administrator-portal', function () {
    return view('admin');
});

Route::get('/support-us', function () {
    return view('support');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/members', function () {
    return view('members');
});

Route::get('/cookies', function () {
    return view('cookies');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/admin-new-here', function () {
    return view('admin.newhere');
});


Route::get('/admin-messages', function () {
    return view('admin.members');
});

Route::get('/admin-about', function () {
    return view('admin.about');
});
Route::get('/admin-leaders', function () {
    return view('admin.leaders');
});
Route::get('/admin-announcements', function () {
    return view('admin.announcements');
});
Route::get('/admin-readings', function () {
    return view('admin.readings');
});
Route::get('/admin-events', function () {
    return view('admin.events');
});

Route::get('/admin-new-here', 'NewhereController@index');

Route::post('/admin-new-here', 'NewhereController@newhere')->name('newhere');

Route::get('/admin-new-here', function () {
  $newhere = DB::table('newhere')->orderBy('id','desc')->limit(1)->get();
    return view('admin.newhere', ['name' => $newhere]);
});

Route::get('/new-here', function () {
  $newhere = DB::table('newhere')->orderBy('id','desc')->limit(1)->get();
    return view('newhere', ['name' => $newhere]);
});

Route::get('/admin-about', 'AboutController@index');

Route::post('/admin-about', 'AboutController@about')->name('about');

Route::get('/admin-about', function () {
  $about = DB::table('about')->orderBy('id','desc')->limit(1)->get();
    return view('admin.about', ['name' => $about]);
});

Route::get('/about', function () {
  $about = DB::table('about')->orderBy('id','desc')->limit(1)->get();
    return view('about', ['name' => $about]);
});

Route::get('/admin-announcements', 'AnnouncementsController@index');

Route::post('/admin-announcements', 'AnnouncementsController@announcements')->name('ann');

Route::get('/admin-announcements', function () {
  $announcements = DB::table('announcements')->orderBy('id','desc')->limit(1)->get();
    return view('admin.announcements', ['name' => $announcements]);
});

Route::get('/announcements', function () {
  $announcements = DB::table('announcements')->orderBy('id','desc')->limit(3)->get();
    return view('announcements', ['name' => $announcements]);
});


Route::get('/admin-events', 'EventsController@index');

Route::post('/admin-events', 'EventsController@events')->name('events');

Route::get('/admin-events', function () {
  $events = DB::table('events')->orderBy('id','desc')->limit(1)->get();
    return view('admin.events', ['name' => $events]);
});

Route::get('/events', function () {
  $events = DB::table('events')->orderBy('id','desc')->limit(3)->get();
    return view('events', ['name' => $events]);
});

Route::get('/admin-readings', 'ReadingsController@index');

Route::post('/admin-readings', 'ReadingsController@readings')->name('readings');

Route::get('/admin-readings', function () {
  $readings = DB::table('readings')->orderBy('id','desc')->limit(1)->get();
    return view('admin.readings', ['name' => $readings]);
});

Route::get('/readings', function () {
  $readings = DB::table('readings')->orderBy('id','desc')->limit(15)->get();
    return view('readings', ['name' => $readings]);
});

Route::get('/', function () {
  $readings = DB::table('readings')->orderBy('id','desc')->limit(4)->get();
    return view('welcome', ['readings' => $readings]);
});

Route::get('/admin-leaders', 'LeadersController@index');

Route::post('/admin-leaders', 'LeadersController@leaders')->name('leaders');

Route::get('/admin-leaders', function () {
  $leaders = DB::table('leaders')->orderBy('id','desc')->limit(1)->get();
    return view('admin.leaders', ['name' => $leaders]);
});

Route::get('/leaders', function () {
  $leaders = DB::table('leaders')->orderBy('id','desc')->limit(5)->get();
    return view('leaders', ['leaders' => $leaders]);
});

Route::get('/admin-members', function () {
  $members = DB::table('members')->orderBy('id','desc')->get();
    return view('admin.members', ['members' => $members]);
});

Route::get('/home', function () {
  $contact = DB::table('contact')->orderBy('id','desc')->limit(50)->get();
    return view('home', ['contact' => $contact]);
});


Route::get('/contact-us', 'ContactController@index');

Route::post('/contact-us', 'ContactController@contact')->name('contact');

Route::post('/members', 'MembersController@members')->name('members');
