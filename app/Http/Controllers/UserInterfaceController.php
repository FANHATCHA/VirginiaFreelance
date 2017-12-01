<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class UserInterfaceController extends Controller
{

  //User Interface Home
    public function home()
    {
      $sliders = Slider::orderBy('created_at', 'desc')
               ->first();
      $title = Slider::orderBy('created_at', 'desc')->first();
      return view('UserInterface.home', compact('sliders', 'title'));

    }

    //User Interface destiantion
      public function index()
      {
        return view('UserInterface.index');

      }

      public function test()
      {
        return view('dashboard.table');

      }

}
