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
    
    public function show()
    {
        $api_result = "AlisaiedHosn";
        return view('home',compact('api_result'));

        //  // Set API access key 
        // $queryString = http_build_query([ 
        //     'access_key' => 'c97abe58b34e41a5d29d8e4d3633b6db' 
        // ]); 
        
        // // API URL with query string 
        // $apiURL = sprintf('%s?%s', 'http://api.marketstack.com/v1/exchanges', $queryString); 
        
        // // Initialize cURL 
        // $ch = curl_init(); 
        
        // // Set URL and other appropriate options 
        // curl_setopt($ch, CURLOPT_URL, $apiURL); 
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        
        // // Execute and get response from API 
        // $api_response = curl_exec($ch); 
        
        // // Close cURL 
        // curl_close($ch);

        // // Convert API json response to array 
        // $api_result = json_decode($api_response, true); 
        // $api_result = "AlisaiedHosn";
        // return view('home',compact('api_result'));
       
    }
    
}
