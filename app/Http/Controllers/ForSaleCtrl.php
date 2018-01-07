<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;
use App\ForSale;
use App\Rent;

class ForSaleCtrl extends Controller
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
      $randGenerator = rand(1, 10000);
      $referenceOps = 'VFPA'.''.$randGenerator;
      $this->validate($request, [
      'forSale_image' => 'image|nullable|max:1999',
      'forSaleTitle' => 'required',
      'status' => 'required',
      'forSaleLocation' => 'required',
      'whatIsItFor' => 'required',
      'price' => 'required',
      'details' => 'required',
    ]);
   $slugTitle = $request->input('forSaleTitle');
   $endSlug = str_slug($slugTitle , '-');
   $slug = $endSlug.'-'.$referenceOps;
// Handle File Upload
    if($request->hasFile('forSale_image')){
      // Get filename with the extension
      $filenameWithExt = $request->file('forSale_image')->getClientOriginalName();
      // Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('forSale_image')->getClientOriginalExtension();
      // Filename to store
      $fileNameToStore= $filename.'_'.time().'.'.$extension;
      // Upload Image
      //$path = $request->file('slider_image')->storeAs('public/img', $fileNameToStore);
      $path = $request->file('forSale_image')->move('img/forSale_images/', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }

    // Create For Sale Item
    $post = new ForSale;
    $post->forSale_image = $fileNameToStore;
    $post->reference = $referenceOps;
    $post->slug = $slug;
    $post->forSaleTitle = $request->input('forSaleTitle');
    $post->status = $request->input('status');
    $post->forSaleLocation = $request->input('forSaleLocation');
    $post->whatIsItFor = $request->input('whatIsItFor');
    $post->price = $request->input('price');
    $post->details = $request->input('details');
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
      $this->validate($request, [
      'description' => 'required',
    ]);
    $post = Rent::find($id);
    $post->description = $request->input('description');
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
        //
    }
}
