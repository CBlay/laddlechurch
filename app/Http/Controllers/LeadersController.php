<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadersController extends Controller
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
      return view('admin.leaders');
  }

  public function leaders(Request $request)
  {
    $request->validate([
     'name' => 'required:max:255',
     'message1' => 'required',
     'email' => 'required',
     'role' => 'required'
   ]);

   $email = $request->post('email');
   $message = $request->post('message1');
   $name = $request->post('name');
   $role = $request->post('role');

   \DB::table('leaders')->insertGetId([
     'name' => $name,
     'message' => $message,
     'email' => $email,
     'role' => $role
   ]);

    return back()->with('message1', 'Your post is submitted successfully');
  }
}
