<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SocialMedia;
use Illuminate\Support\Facades\Input;

class SocialMediaCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request, [
        'socialMedia' => 'required|string|',
        "url" => "required|url"
        ]);

       $user = SocialMedia::where('url', '=', Input::get('url'))->first();
      if ($user === null)
      {
        //Using eloquent a laravel library to insert our data into database
        $validateForm = new SocialMedia;
        $validateForm->socialMedia = $request->input('socialMedia');
        $validateForm->url = $request->input('url');
        $validateForm->save();
        return back()->with('success','url added successfully !');
      }
      else{
        DB::table('social_media')
              ->where('socialMedia','=', Input::get('socialMedia'))
              ->update([
                'url' => $request->input('url'),
                'socialMedia' => $request->input('socialMedia')
              ]);
              return back()->with('success','url updated successfully !');

      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
