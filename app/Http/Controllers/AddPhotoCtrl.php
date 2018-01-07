<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddPhoto;

class AddPhotoCtrl extends Controller
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
      'image' => 'required|image|nullable|max:1999',
      'photo_slug' => 'required',
    ]);
    // Handle File Upload
    if($request->hasFile('image')){
      // Get filename with the extension
      $filenameWithExt = $request->file('image')->getClientOriginalName();
      // Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('image')->getClientOriginalExtension();
      // Filename to store
      $fileNameToStore= $filename.'_'.time().'.'.$extension;
      // Upload Image
      //$path = $request->file('slider_image')->storeAs('public/img', $fileNameToStore);
      $path = $request->file('image')->move('img/slider_images/', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }

    // Create add for photos
    $post = new AddPhoto;
    $post->image = $fileNameToStore;
    $post->photo_slug = $request->input('photo_slug');
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
        //
    }
}
