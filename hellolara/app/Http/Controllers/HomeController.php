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
   // public function __construct()
   // {
    //    $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function schools()
    {
        return view('schools');
    }

    public function parents()
    {
        return view('parents');
    }
    public function hospitals()
    {
        return view('hospitals');
    }

    public function userform()
    {

        return view('userform');
    }

    public function pimwadee()
    {
        return view('pimwadee');
    }

    
    public function suporn()
    {
        return view('suporn');
    }
}
