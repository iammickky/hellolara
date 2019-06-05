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

<<<<<<< HEAD
    public function kanyamat()
    {

        return view('kanyamat');
=======
    public function pimwadee()
    {
        return view('pimwadee');
>>>>>>> 113ebd0533ccd069948fe152825b66463c5f199f
    }

    
    public function suporn()
    {
        return view('suporn');
    }
}
