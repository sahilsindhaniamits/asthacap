<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function online()
    {
        return view('online');
    }
     public function promotion()
    {
        return view('promotion');
    }
     public function company()
    {
        return view('company_profile');
    }
    public function vip_events()
    {
        return view('vip');
    }
     public function announcement()
    {
        return view('announcement');
    }
    
   public function tutorial()
    {
        return view('tutorial');
    }
   
}
