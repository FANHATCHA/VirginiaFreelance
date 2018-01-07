<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Rent;
//use App\AddDestination;
//use App\AddDestination;
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
      $messages = Contact::orderBy('created_at', 'desc')->where('status', 0)->paginate(10);
      $TakeOnes = Contact::orderBy('created_at', 'desc')->where('status', 1)->paginate(10);
      $getStatus = DB::table('contacts')->where('status', 0)->get();
      $getOne = DB::table('contacts')->where('status',1)->get();
      return view('dashboard.dashboard', compact('messages', 'TakeOnes','getOne','getStatus'));
    }

    public function rent()
    {
       $rents = Rent::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.rent', compact('rents'));
    }
    public function forSale()
    {
        return view('dashboard.for-sale');
    }

}
