<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketsController extends Controller
{
    public function index()
    {
        

                // Set API access key 
                $queryString = http_build_query([ 
                    'access_key' => 'c97abe58b34e41a5d29d8e4d3633b6db',
                    'symbols' => 'DJI.INDX'
                ]); 
    //             https://api.marketstack.com/v1/tickers
    // ? access_key = YOUR_ACCESS_KEY
                
                // API URL with query string 
                $apiURL = sprintf('%s?%s', 'http://api.marketstack.com/v1/exchanges', $queryString); 
        
                //$apiURL = sprintf('%s?%s', 'http://api.marketstack.com/v1/eod', $queryString); Free Plan Not supported
        
                //$apiURL = 'http://finance.google.com/finance/info?client=ig&q=GOOG';
                // Initialize cURL 

                $ch = curl_init(); 
                
                // Set URL and other appropriate options 
                curl_setopt($ch, CURLOPT_URL, $apiURL); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                
                // Execute and get response from API 
                $api_response = curl_exec($ch); 
                
                // Close cURL 
                curl_close($ch);
        
                // Convert API json response to array 
                $api_result = json_decode($api_response, true); 
                //$api_result = "AlisaiedHosn";
        
                $myVar="This is a variable";
                
                $secondVar="This is my second variable";
                $data=[
                    'marketOne'=>'Apple',
                    'marketTwo'=>'Samsung'
                ];
            //dd($api_result);
                return view('Markets.index',compact('myVar','secondVar','data','api_result'));

    }

    public function indexdd()
    {
        // Set API access key 
        $queryString = http_build_query([ 
            'access_key' => 'c97abe58b34e41a5d29d8e4d3633b6db',
            'symbols' => 'DJI.INDX'
        ]); 
        
        // API URL with query string 
        $apiURL = sprintf('%s?%s', 'http://api.marketstack.com/v1/exchanges', $queryString); 

        //$apiURL = sprintf('%s?%s', 'http://api.marketstack.com/v1/eod', $queryString); Free Plan Not supported

        // Initialize cURL 
        $ch = curl_init(); 
        
        // Set URL and other appropriate options 
        curl_setopt($ch, CURLOPT_URL, $apiURL); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        
        // Execute and get response from API 
        $api_response = curl_exec($ch); 
        
        // Close cURL 
        curl_close($ch);

        // Convert API json response to array 
        $api_result = json_decode($api_response, true); 
        //$api_result = "AlisaiedHosn";

        $myVar="This is a variable";
        
        $secondVar="This is my second variable";
        $data=[
            'marketOne'=>'Apple',
            'marketTwo'=>'Samsung'
        ];
        dd($api_result);
        return view('Markets.index',compact('myVar','secondVar','data','api_result'));
        
        

    }

    public function index2()
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
