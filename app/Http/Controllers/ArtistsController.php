<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Artist;

class ArtistsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      return view('pages.album');
    }
    public function createalbum(Request $request)
    {
    	$this->validate($request, array(
        'name' => 'required',
        'album_art' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ));

    	$albums = new albums;
    	$albums->album_name = $request->name;

    	if($request->hasFile('image'))
    	{
          $image = $request->file('image');
          $filename = $image->getClientOriginalExtension();
          Image::make($image)->resize(240, 240)->save( storage_path('/uploads/' . $filename ) ); // Sort out the path
          $albums->picture = $filename;
        };

        $albums->save();

    }
}
