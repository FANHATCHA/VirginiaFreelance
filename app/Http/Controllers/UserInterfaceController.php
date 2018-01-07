<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\HotDeals;
use App\AddDestination;
use App\Rent;
use App\ForSale;
use App\AddPhoto;

use DB;

class UserInterfaceController extends Controller
{

  //User Interface Home
    public function home()
    {
      /**Hot deals display**/
      $hotdeals = Rent::orderBy('created_at', 'desc')->Paginate(20);

      $images = DB::table('add_photos')
     ->orderBy('created_at', 'desc')
     ->get();

      return view('UserInterface.index', compact(
        'hotdeals',
        'images'
      ));


    }

            //User Interface destinations via slugs
            public function UXHotDeals($slug)
            {

                        $deals = DB::table('rents')
                       ->where('slug', '=',$slug)
                       ->first();
                       $images = DB::table('add_photos')
                      ->where('photo_slug', '=',$slug)
                      ->orderBy('created_at', 'desc')
                      ->get();
                      return view('UserInterface.rentDetails', compact(
                          'deals',
                          'images'
                      ));


            }

      public function rentLongTerm($slugLink)
      {
       $longTerms = Rent::orderBy('created_at', 'desc')
       ->where('whatIsItFor', '=',$slugLink)
       ->Paginate(6);
        return view('UserInterface.rent-long-term', compact(
        'longTerms',
        'images'
        ));
      }

            public function itemSale($slugLink)
            {
             $longTerms  = Rent::orderBy('created_at', 'desc')
             ->where('whatIsItFor', '=',$slugLink)
             ->Paginate(6);
              return view('UserInterface.for-sale', compact(
              'longTerms',
              'images'
              ));
            }

      public function openRent ($slugLink,$slug)
      {

        $deals = DB::table('rents')
       ->where('slug', '=',$slug)
       ->first();
       $images = DB::table('add_photos')
      ->where('photo_slug', '=',$slug)
      ->orderBy('created_at', 'desc')
      ->get();
      return view('UserInterface.rentDetails', compact(
          'deals',
          'images'
      ));

      }

      public function forSale($slugLink,$slug)
      {
        $deals = DB::table('rents')
       ->where('slug', '=',$slug)
       ->first();
       $images = DB::table('add_photos')
      ->where('photo_slug', '=',$slug)
      ->orderBy('created_at', 'desc')
      ->get();
      return view('UserInterface.rentDetails', compact(
          'deals',
          'images'
      ));
      }

      public function pds()
      {
        return View('UserInterface.pds');
      }
      public function contact()
      {
        return View('UserInterface.contact');
      }

}
