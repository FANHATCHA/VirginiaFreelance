<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlideShow;
use Illuminate\Support\Facades\File;

class SlideShowCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }
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
      'slideshow' => 'required|image|nullable|max:1999',

    ]);
    // Handle File Upload
    if($request->hasFile('slideshow')){
      // Get filename with the extension
      $filenameWithExt = $request->file('slideshow')->getClientOriginalName();
      // Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('slideshow')->getClientOriginalExtension();
      // Filename to store
      $fileNameToStore= $filename.'_'.time().'.'.$extension;
      // Upload Image
      //$path = $request->file('slider_image')->storeAs('public/img', $fileNameToStore);
      $path = $request->file('slideshow')->move('img/slideshow_images/', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }

    // Create add for photos
    $post = new SlideShow;
    $post->slideshow = $fileNameToStore;
    $post->save();
    return back()->with('success','Image added succesfully');
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
      $validateForm = SlideShow::find($id);
     // Delete IMage
     File::delete('img/slideshow_images/'.$validateForm->slideshow);
     $validateForm->delete();
    return back()->with('success','Image has been sent successfully!');
    }
}
