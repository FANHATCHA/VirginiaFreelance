<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

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
       $sliders = Slider::orderBy('created_at', 'desc')->paginate(5);
       return view('dashboard.UI-Homepage', compact('sliders'));
   }

}
