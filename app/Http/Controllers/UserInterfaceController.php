<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInterfaceController extends Controller
{

  //User Interface Home
    public function home()
    {
      return view('UserInterface.home');

    }

    //User Interface destiantion
      public function index()
      {
        return view('UserInterface.index');

      }

}
