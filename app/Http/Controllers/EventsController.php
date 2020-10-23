<?php

namespace App\Http\Controllers;

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

  public function index()
  {
      return view('admin.events');
  }

  public function events(Request $request)
  {
    $request->validate([
     'title1' => 'required:max:255',
     'message1' => 'required',
     'dte' => 'required'
   ]);

   $title = $request->post('title1');
   $message = $request->post('message1');
   $dte = $request->post('dte');

   \DB::table('events')->insertGetId([
     'title' => $title,
     'message' => $message,
     'dte' => $dte
   ]);

    return back()->with('message1', 'Your post is submitted successfully');
  }
}
