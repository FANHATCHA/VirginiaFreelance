<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class SaveMsgCtrl extends Controller
{
  public function store(Request $request)
  {
    $setStatus = 0;
    $this->validate($request, [
    'email' => 'required|string|email|max:255|',
    'phone' => 'required|string|min:8|max:14|',
    'fullName' => 'required|string|max:255',
    'msg' => 'string|max:1000',
  ]);

  // Create contact
  $post = new Contact;
  $post->email = $request->input('email');
  $post->phone = $request->input('phone');
  $post->fullName= $request->input('fullName');
  $post->msg = $request->input('msg');
  $post->status = $setStatus;
  $post->save();
  return back()->with('success','Message Sent succesfully ');
  }

}
