<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\HotDeals;
use App\AddDestination;
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
      /**destinations display**/
      $destinations = AddDestination::all();
      return view('UserInterface.home', compact(
        'sliders',
        'sliderOne',
        'sliderTwo',
        'sliderThree',
        'sliderFour',
        'hotdeals',
        'destinations'
      ));


    }


          //User Interface destinations via slugs
            public function destinations($slug)
            {
              $posts = AddDestination::where('slug', '=', $slug)->first();
              /**Internal sliders display**/
              $sliderOne = DB::table('internal_sliders')
              ->where('slider_position', 1)
              ->get();
              $sliderTwo = DB::table('internal_sliders')
              ->where('slider_position', 2)
              ->get();
              $sliderThree = DB::table('internal_sliders')
              ->where('slider_position', 3)
              ->get();
              $sliderFour = DB::table('internal_sliders')
              ->where('slider_position', 4)
              ->get();

              return view('UserInterface.index', compact(
                'posts',
                'sliderOne',
                'sliderTwo',
                'sliderThree',
                'sliderFour'
            ));

            }

      public function test()
      {
        return view('dashboard.table');

      }

}
