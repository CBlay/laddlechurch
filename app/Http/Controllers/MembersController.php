<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{


  public function index()
  {
      return view('members');
  }


  public function members(Request $request)
  {
     $request->validate([
      'name' => 'required:max:255',
      'email' => 'required:max:255',
      'tel' => 'required'
    ]);

    $name = $request->post('name');
    $email = $request->post('email');
    $tel = $request->post('tel');

    \DB::table('members')->insertGetId([
      'name' => $name,
      'email' => $email,
      'tel' => $tel
    ]);

    return back()->with('message1', 'Your data has been added successfully!');
  }
}
