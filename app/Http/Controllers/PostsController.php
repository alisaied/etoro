<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function index()
    {
        //$posts=DB::select('select * from posts where id >  ?', [1]); 
        //$posts=DB::select('select * from posts where id = :id', [3]); 
        //$posts=DB::select('select * from posts where id = :id', ['id'=>2]); 

        $id=4;
        //$posts= DB::table('posts')->where('id',$id)->get();
        //$posts= DB::table('posts')->where('id',$id)->select('body')->get();
        //$posts= DB::table('posts')->select('body')->get();
        //$posts= DB::table('posts')->select('body')->where('created_at','=',now()->subDay())->get();
        // $posts= DB::table('posts')->where('created_at','=',now()->subDay())
        // ->orWhere('title','like','%pro%')->orWhereBetween('id',[1,3])->get();
        //$posts= DB::table('posts')->orderBy('id','desc')->get();
        //$posts= DB::table('posts')->latest()->get(); // ordered by created_at
        //$posts= DB::table('posts')->find(4) ; // find by id
        //$posts= DB::table('posts')->where('title','=','Ms.')->count() ; // min, max,
        //$posts= DB::table('posts')->where('title','=','Ms.')->avg('id') ; // min, max,

        // $posts= DB::table('posts')
        //         ->insert(['title'=> 'this title','body'=> 'this is the body from insert']);

        // $posts= DB::table('posts')
        // ->where('id','=',3)
        // ->update(['title'=> 'new title','body'=> 'updated body this is the body from insert']);

        $posts= DB::table('posts')
        ->where('id','=',6)
        ->delete();

        dd($posts);
        //return view('posts.index');
    }


}
