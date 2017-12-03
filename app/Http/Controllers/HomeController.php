<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\HotDeals;
use App\AddDestination;
use DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dashboard');
    }

    public function icons()
    {
        return view('dashboard.icons');
    }

    public function uiHomepage()
    {
      /**Slider display**/
       $sliders = Slider::orderBy('created_at', 'desc')->whereBetween('slider_position', [1, 4])->paginate(3);
       $sliderOne = DB::table('sliders')->where('slider_position', 1)->get();
       $sliderTwo = DB::table('sliders')->where('slider_position', 2)->first();
       $sliderThree = DB::table('sliders')->where('slider_position',3)->first();
       $sliderFour = DB::table('sliders')->where('slider_position',4)->first();

       /**Hot deals display**/
       $hotdeals = HotDeals::orderBy('created_at', 'desc')->paginate(3);

       return view('dashboard.UI-Homepage', compact(
         'sliders',
         'sliderOne',
         'sliderTwo',
         'sliderThree',
         'sliderFour',
         'hotdeals'
       ));
   }

   public function destinations()
   {

   /**destinations display**/
   $destinations = AddDestination::orderBy('created_at', 'desc')->paginate(5);
   return view('dashboard.destinations', compact(
     'destinations'
   ));
   }

}
