<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function char(){
      return view('pages.char');
    }

    public function comics(){
      return view('pages.comics');
    }

    public function movies(){
      return view('pages.movies');
    }

    public function webShows(){
      return view('pages.webShows');
    }
}
