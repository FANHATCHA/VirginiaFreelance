<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;
use App\Rent;


class RentCtrl extends Controller
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
      $add ="N/A";
      $randGenerator = rand(1, 10000);
      $referenceOps = 'VFPA'.''.$randGenerator;
      $this->validate($request, [
      'rent_image' => 'required|image|nullable|max:1999',
      'rentTitle' => 'required',
      'status' => 'required',
      'rentLocation' => 'required',
      'whatIsItFor' => 'required',
      'price' => 'required',
      'details' => 'required',
    ]);
   $slugTitle = $request->input('rentTitle');
   $endSlug = str_slug($slugTitle , '-');
   $slug = $endSlug.'-'.$referenceOps;
// Handle File Upload
    if($request->hasFile('rent_image')){
      // Get filename with the extension
      $filenameWithExt = $request->file('rent_image')->getClientOriginalName();
      // Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('rent_image')->getClientOriginalExtension();
      // Filename to store
      $fileNameToStore= $filename.'_'.time().'.'.$extension;
      // Upload Image
      //$path = $request->file('slider_image')->storeAs('public/img', $fileNameToStore);
      $path = $request->file('rent_image')->move('img/rent_images/', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }

    // Create   Rent Item
    $post = new Rent;
    $post->rent_image = $fileNameToStore;
    $post->reference = $referenceOps;
    $post->slug = $slug;
    $post->rentTitle = $request->input('rentTitle');
    $post->status = $request->input('status');
    $post->rentLocation = $request->input('rentLocation');
    $post->whatIsItFor = $request->input('whatIsItFor');
    $post->price = $request->input('price');
    $post->details = $request->input('details');
    $post->description = $add;
    $post->save();
    return back()->with('success','Item added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $items= Rent::find($id);
       return view('dashboard.openRent', compact('items'));
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
      /*$randGenerator = rand(1, 10000);
      $referenceOps = 'VFPA'.''.$randGenerator;*/
      $this->validate($request, [
      'rent_image' => 'image|nullable|max:1999',
      'rentTitle' => 'required',
      'status' => 'required',
      'rentLocation' => 'required',
      'whatIsItFor' => 'required|',
      'price' => 'required',
      'details' => 'required',
    ]);
   /*$slugTitle = $request->input('rentTitle');
   $endSlug = str_slug($slugTitle , '-');
   $slug = $endSlug.'-'.$referenceOps;*/
// Handle File Upload
    if($request->hasFile('rent_image')){
      // Get filename with the extension
      $filenameWithExt = $request->file('rent_image')->getClientOriginalName();
      // Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('rent_image')->getClientOriginalExtension();
      // Filename to store
      $fileNameToStore= $filename.'_'.time().'.'.$extension;
      // Upload Image
      //$path = $request->file('slider_image')->storeAs('public/img', $fileNameToStore);
      $path = $request->file('rent_image')->move('img/rent_images/', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }

    // Create   Rent Item
    $post = Rent::find($id);
    //$post->rent_image = $fileNameToStore;
    /*$post->reference = $referenceOps;
    $post->slug = $slug;*/
    if($request->hasFile('rent_image')){
           $post->rent_image = $fileNameToStore;
       }
    $post->rentTitle = $request->input('rentTitle');
    $post->status = $request->input('status');
    $post->rentLocation = $request->input('rentLocation');
    $post->whatIsItFor = $request->input('whatIsItFor');
    $post->price = $request->input('price');
    $post->details = $request->input('details');
    $post->save();
    return back()->with('success','Item updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $validateForm = Rent::find($id);
      $validateForm->delete();
    return back()->with('error','Item deleted succesfully!');
    }
}
