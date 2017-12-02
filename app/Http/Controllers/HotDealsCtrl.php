<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Input;
use DB;
use App\HotDeals;

class HotDealsCtrl extends Controller
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
      'hotdeals_image' => 'image|nullable|max:1999',
      'hotDealTitle' => 'required',
      'description' => 'required',
      'numberofStars' => 'required|integer',
      'price' => 'required|',
    ]);

// Handle File Upload
    if($request->hasFile('hotdeals_image')){
      // Get filename with the extension
      $filenameWithExt = $request->file('hotdeals_image')->getClientOriginalName();
      // Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('hotdeals_image')->getClientOriginalExtension();
      // Filename to store
      $fileNameToStore= $filename.'_'.time().'.'.$extension;
      // Upload Image
      //$path = $request->file('slider_image')->storeAs('public/img', $fileNameToStore);
      $path = $request->file('hotdeals_image')->move('img/hotdeals_images/', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }
    // Create   hot deal
    $post = new HotDeals;
    $post->hotdeals_image = $fileNameToStore;
    $post->hotDealTitle = $request->input('hotDealTitle');
    $post->description = $request->input('description');
    $post->numberofStars = $request->input('numberofStars');
    $post->price = $request->input('price');
    $post->username = auth()->user()->name;
    $post->save();
    return back()->with('success','Hot deal added successfully !');
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
