<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingsController extends Controller
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
      return view('admin.readings');
  }

  public function readings(Request $request)
  {
    $request->validate([
     'title1' => 'required:max:255',
     'message1' => 'required',
     'dte' => 'required',
     'name' => 'required'
   ]);

   $title = $request->post('title1');
   $message = $request->post('message1');
   $name = $request->post('name');
   $dte = $request->post('dte');

   \DB::table('readings')->insertGetId([
     'title' => $title,
     'message' => $message,
     'name' => $name,
     'dte' => $dte
   ]);

    return back()->with('message1', 'Your post is submitted successfully');
  }
}
