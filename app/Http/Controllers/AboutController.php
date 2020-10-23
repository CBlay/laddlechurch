<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
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
      return view('admin.abouts');
  }

  public function about(Request $request)
  {
     $request->validate([
      'title1' => 'required:max:255',
      'message1' => 'required'
    ]);

    $title = $request->post('title1');
    $message = $request->post('message1');

    \DB::table('about')->insertGetId([
      'title' => $title,
      'message' => $message
    ]);

    return back()->with('message1', 'Your post is submitted successfully');
  }
}
