<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Redirect;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('public_views.index');
    }
    public function album()
    {
        return view('pages.album');
    }
    public function artist()
    {
        return view('pages.artist');
    }
    public function genres()
    {
        return view('pages.genres');
    }
    public function top_track()
    {
        return view('pages.top_track');
    }
    public function free_music()
    {
        return view('pages.free_music');
    }
    public function stations()
    {
        return view('pages.stations');
    }
    public function download()
    {
        return view('pages.download');
    }
    public function purchase()
    {
        return view('pages.purchase');
    }
    public function history()
    {
        return view('pages.history');
    }
    public function feature_playlist()
    {
        return view('pages.feature_playlist');
    }
    public function add_playlist()
    {
        return view('pages.add_playlist');
    }
    public function favourite()
    {
        return view('pages.favourite');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminhome()
    {
        return view('users.admin.home');
    }

    public function signup(Request $request)
    {
        if($request->name == NULL || $request->email == NULL || $request->password == NULL || $request->password_confirmation == NULL)
        {
            return Redirect::back()->with('error','Missing Inputs!');
        }
        $newuser = new User;
        $newuser->name = $request->get('name');
        $newuser->email = $request->get('email');
        $newuser->user_type = "subscriber";
        if($request->get('password') == $request->get('password_confirmation'))
        {
            $newuser->password = Hash::make($request->password);
        }
        else
        {
            return Redirect::back()->with('error','Passwords Do Not Match!');
        }
        $newuser->save();

        return redirect("/dashboard");
    }

    public function adminreg(Request $request)
    {
        if($request->name == NULL || $request->email == NULL || $request->password == NULL || $request->password_confirmation == NULL)
        {
            return Redirect::back()->with('error','Missing Inputs!');
        }
        $newuser = new User;
        $newuser->name = $request->get('name');
        $newuser->email = $request->get('email');
        $newuser->user_type = "admin";
        if($request->get('password') == $request->get('password_confirmation'))
        {
            $newuser->password = Hash::make($request->password);
        }
        else
        {
            return Redirect::back()->with('error','Passwords Do Not Match!');
        }
        $newuser->save();

        return redirect("/dashboard")->with('success','User Created Successfully!');
    }

    public function artistreg(Request $request)
    {
        if($request->name == NULL || $request->email == NULL || $request->password == NULL)
        {
            return Redirect::back()->with('error','Missing Inputs!');
        }
        $newuser = new User;
        $newuser->name = $request->get('name');
        $newuser->email = $request->get('email');
        $newuser->user_type = "artist";
        $newuser->password = Hash::make($request->password);
        $newuser->save();

        return redirect("/dashboard")->with('success','User Created Successfully!');
    }

    public function advertiserreg(Request $request)
    {
        if($request->name == NULL || $request->email == NULL || $request->password == NULL)
        {
            return Redirect::back()->with('error','Missing Inputs!');
        }
        $newuser = new User;
        $newuser->name = $request->get('name');
        $newuser->email = $request->get('email');
        $newuser->user_type = "advertiser";
        $newuser->password = Hash::make($request->password);
        $newuser->save();

        return redirect("/dashboard")->with('success','User Created Successfully!');
    }

}
