<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\HotDeals;
use App\AddDestination;
use App\TailorMadeTrip;
use App\ClientExp;
use App\SocialMedia;
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

      /**********Social Media *************/
      $facebook = DB::table('social_media')->where('socialMedia', 'facebook')->first();
      $twitter = DB::table('social_media')->where('socialMedia', 'twitter')->first();
      $Instagram = DB::table('social_media')->where('socialMedia', 'Instagram')->first();
      $googlePlus = DB::table('social_media')->where('socialMedia', 'Google+')->first();

      return view('UserInterface.home', compact(
        'sliders',
        'sliderOne',
        'sliderTwo',
        'sliderThree',
        'sliderFour',
        'hotdeals',
        'destinations',
        'facebook',
        'twitter',
        'Instagram',
        'googlePlus'

      ));


    }


          //User Interface destinations via slugs
            public function destinations($slug)
            {
              /***************Tailor made trips***************/
              $tailorTrips = TailorMadeTrip::orderBy('created_at', 'desc')
              ->where('destination_slug', '=',$slug)
              ->Paginate(6);

              /****************Client Experience**************/
              $clientExps = ClientExp::orderBy('created_at', 'desc')
              ->where('destination_slug', '=',$slug)
              ->Paginate(6);
              /****************************************************/
              $posts = AddDestination::where('slug', '=', $slug)->first();
              /**********Internal sliders display****************/
              $sliderOne = DB::table('internal_sliders')
              ->where('destination_slug', '=',$slug)
              ->whereIn('slider_position', [1])
              ->get();
              $sliderTwo = DB::table('internal_sliders')
              ->where('destination_slug', '=',$slug)
              ->whereIn('slider_position', [2])
              ->get();
              $sliderThree = DB::table('internal_sliders')
              ->where('destination_slug', '=',$slug)
              ->whereIn('slider_position', [3])
              ->get();
              $sliderFour = DB::table('internal_sliders')
              ->where('destination_slug', '=', $slug)
              ->whereIn('slider_position', [4])
              ->get();
              /**********Social Media *************/
              $facebook = DB::table('social_media')->where('socialMedia', 'facebook')->first();
              $twitter = DB::table('social_media')->where('socialMedia', 'twitter')->first();
              $Instagram = DB::table('social_media')->where('socialMedia', 'Instagram')->first();
              $googlePlus = DB::table('social_media')->where('socialMedia', 'Google+')->first();

              return view('UserInterface.index', compact(
                'posts',
                'sliderOne',
                'sliderTwo',
                'sliderThree',
                'sliderFour',
                'tailorTrips',
                'clientExps',
                'facebook',
                'twitter',
                'Instagram',
                'googlePlus'
            ));

            }

      public function test()
      {
        return view('dashboard.table');

      }

}
