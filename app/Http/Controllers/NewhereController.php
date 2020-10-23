<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewhereController extends Controller
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
      return view('admin.newhere');
  }

  public function newhere(Request $request)
  {
     $request->validate([
      'title1' => 'required:max:255',
      'message1' => 'required'
    ]);

    $title = $request->post('title1');
    $message = $request->post('message1');

    \DB::table('newhere')->insertGetId([
      'title' => $title,
      'message' => $message
    ]);

    return back()->with('message1', 'Your post is submitted successfully');
  }
}
