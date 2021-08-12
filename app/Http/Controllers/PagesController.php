<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about()
    {
        return view('about')->with('name','alisaied');
    }
    public function posts()
    {
        return view('about')->with('name','alisaied');
    }
    public function markets()
    {
        return view('Markets.index')->with('name','alisaied');
    }

}
