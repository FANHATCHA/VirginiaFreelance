<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\AddDestination;

class AddDestinationCtrl extends Controller
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
      'slug' => 'required|alpha_dash|min:5|max:255',
      'destinationName' => 'required',
      'destImgIcon' => 'image|nullable|max:1999',
      'localAgentName' => 'required',
      'localAgentImg' => 'image|nullable|max:1999',
      'description' => 'required'
    ]);

    /*** process destination icon ***/
    if($request->hasFile('destImgIcon')){
      // Get filename with the extension
      $filenameWithExt = $request->file('destImgIcon')->getClientOriginalName();
      // Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('destImgIcon')->getClientOriginalExtension();
      // Filename to store
      $fileNameToStore= $filename.'_'.time().'.'.$extension;
      // Upload Image
      //$path = $request->file('slider_image')->storeAs('public/img', $fileNameToStore);
      $path = $request->file('destImgIcon')->move('img/destination_icons/', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }

    /*** process local agents images ***/
        if($request->hasFile('localAgentImg')){
          // Get filename with the extension
          $filenameWithExt2 = $request->file('localAgentImg')->getClientOriginalName();
          // Get just filename
          $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
          // Get just ext
          $extension2 = $request->file('localAgentImg')->getClientOriginalExtension();
          // Filename to store
          $fileNameToStore2= $filename2.'_'.time().'.'.$extension2;
          // Upload Image
          //$path = $request->file('slider_image')->storeAs('public/img', $fileNameToStore);
          $path2 = $request->file('localAgentImg')->move('img/local_agents/', $fileNameToStore2);
        } else {
          $fileNameToStore2 = 'noimage.jpg';
        }
    // Create destinations
    $post = new AddDestination;
    $post->destImgIcon = $fileNameToStore;
    $post->localAgentImg = $fileNameToStore2;
    $post->slug = $request->input('slug');
    $post->destinationName = $request->input('destinationName');
    $post->localAgentName = $request->input('localAgentName');
    $post->description = $request->input('description');
    $post->save();
    return back()->with('success','Destination added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$getDestinations = AddDestination::orderBy('created_at', 'desc')->paginate(10);
        $getDestinations= AddDestination::find($id);
        return view('dashboard.open', compact('getDestinations'));
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
