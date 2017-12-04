<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\ClientExp;

class UXCtrl extends Controller
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
      'ux_image' => 'image|nullable|max:1999',
      'headerTitle' => 'required',
      'subTitle' => 'required',
      'description' => 'required',
      'btnOneName' => 'required',
      'btnTwoName' => 'required',

    ]);

    // Handle File Upload
    if($request->hasFile('ux_image')){
      // Get filename with the extension
      $filenameWithExt = $request->file('ux_image')->getClientOriginalName();
      // Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('ux_image')->getClientOriginalExtension();
      // Filename to store
      $fileNameToStore= $filename.'_'.time().'.'.$extension;
      // Upload Image
      //$path = $request->file('slider_image')->storeAs('public/img', $fileNameToStore);
      $path = $request->file('ux_image')->move('img/ux_images/', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }
    // Create Client experience (UX)
    $post = new ClientExp;
    $post->ux_image = $fileNameToStore;
    $post->headerTitle = $request->input('headerTitle');
    $post->subTitle = $request->input('subTitle');
    $post->description = $request->input('description');
    $post->btnOneName = $request->input('btnOneName');
    $post->btnTwoName = $request->input('btnTwoName');
    $post->destination_slug = $request->input('destination_slug');
    $post->save();
    return back()->with('success','Client Experience added successfully!');
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
