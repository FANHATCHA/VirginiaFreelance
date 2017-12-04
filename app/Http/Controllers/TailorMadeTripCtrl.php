<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\TailorMadeTrip;

class TailorMadeTripCtrl extends Controller
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
      'tailorTrip_image' => 'image|nullable|max:1999',
      'tailorTripTitle' => 'required',
      'description' => 'required',
      'numberofStars' => 'required|integer',
      'price' => 'required|',
    ]);

    // Handle File Upload
    if($request->hasFile('tailorTrip_image')){
      // Get filename with the extension
      $filenameWithExt = $request->file('tailorTrip_image')->getClientOriginalName();
      // Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('tailorTrip_image')->getClientOriginalExtension();
      // Filename to store
      $fileNameToStore= $filename.'_'.time().'.'.$extension;
      // Upload Image
      //$path = $request->file('slider_image')->storeAs('public/img', $fileNameToStore);
      $path = $request->file('tailorTrip_image')->move('img/tailorTrip_images/', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }
    // Create TailorMadeTrip
    $post = new TailorMadeTrip;
    $post->tailorTrip_image = $fileNameToStore;
    $post->tailorTripTitle = $request->input('tailorTripTitle');
    $post->description = $request->input('description');
    $post->numberofStars = $request->input('numberofStars');
    $post->price = $request->input('price');
    $post->destination_slug = $request->input('destination_slug');
    $post->save();
    return back()->with('success','Tailor Made trip added successfully!');
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
