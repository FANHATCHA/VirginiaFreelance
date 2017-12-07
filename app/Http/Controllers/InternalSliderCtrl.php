<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use DB;
use App\InternalSlider;

class InternalSliderCtrl extends Controller
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
      'slider_position' => 'required',
      'description' => 'required',
      'slider_image' => 'image|nullable|max:1999'
    ]);

// Handle File Upload
    if($request->hasFile('slider_image')){
      // Get filename with the extension
      $filenameWithExt = $request->file('slider_image')->getClientOriginalName();
      // Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('slider_image')->getClientOriginalExtension();
      // Filename to store
      $fileNameToStore= $filename.'_'.time().'.'.$extension;
      // Upload Image
      $path = $request->file('slider_image')->move('img/internalSlider_images/', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }

    //$user = InternalSlider::where('slider_position', '=', Input::get('slider_position'))->first();
      // if ($user === null)
       //{
         // Create Post
         $post = new InternalSlider;
         $post->slider_position = $request->input('slider_position');
         $post->description = $request->input('description');
         $post->destination_slug = $request->input('destination_slug');
         $post->slider_image = $fileNameToStore;
         $post->save();
         return back()->with('success','Slider created successfully !');
       /*}
       else{
         DB::table('internal_sliders')
               ->where('slider_position','=', Input::get('slider_position'))
               ->update([
                 'slider_position' => $request->input('slider_position'),
                 'description' => $request->input('description'),
                 'slider_image' => $slider_image = $fileNameToStore,
               ]);
               return back()->with('success','Updated successfully !');

       }*/
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
