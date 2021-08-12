<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketsController extends Controller
{

    public function index()
    {
        # BL
        $myVar="This is a variable";
        
        $secondVar="This is my second variable";
        $data=[
            'marketOne'=>'Apple',
            'marketTwo'=>'Samsung'
        ];

        return view('Markets.index',compact('myVar','secondVar','data'));
        

    }
    public function index1(){
        $myVar="This is a variable";
        
        $secondVar="This is my second variable";
        $data=[
            'marketOne'=>'Apple',
            'marketTwo'=>'Samsung'
        ];
        // Compact method pass data to view
        //        return view('Markets.index',compact('myVar','secondVar'));
        return view('Markets.index',compact('myVar','secondVar','data'));
        
        //return view('Markets.index')->with('data',$data);

    }
    
    public function show1($name){
       
        $data=[
            'apple'=>'Apple',
            'samsung'=>'Samsung'
        ];
        return view('Markets.index',
        ['market'=> $data[$name] ?? 'market '.$name.' does not exist'
    ]);

    }
}
