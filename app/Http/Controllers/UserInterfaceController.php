<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\HotDeals;
use DB;

class UserInterfaceController extends Controller
{

  //User Interface Home
    public function home()
    {
      /**sliders display**/
      $sliderOne = DB::table('sliders')->where('slider_position', 1)->get();
      $sliderTwo = DB::table('sliders')->where('slider_position', 2)->get();
      $sliderThree = DB::table('sliders')->where('slider_position',3)->get();
      $sliderFour = DB::table('sliders')->where('slider_position',4)->get();

      /**Hot deals display**/
      $hotdeals = HotDeals::orderBy('created_at', 'desc')->Paginate(6);
      return view('UserInterface.home', compact(
        'sliders',
        'sliderOne',
        'sliderTwo',
        'sliderThree',
        'sliderFour',
        'hotdeals'
      ));


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
