<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Prophecy\Promise\ReturnPromise;
use Symfony\Component\VarDumper\VarDumper;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cars= Car::all();

        //$cars= Car::where('name','=','Audi')->get();

        //$cars= Car::where('id','<',3)->get();

        //$cars= Car::whereNotNull('created_at')->get();

        //$cars= Car::firstOrFail();

        //print_r(Car::where('name','=','Audi')->count());

        //print_r(Car::all()->avg('founded'));


          //$cars = Car::all()->toArray();
          $cars = Car::all()->toJson();
          $cars = json_decode($cars);
        
          //dd($cars);
      
       return view('cars.index',['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd('ok');  to check routing is working well
        // method no. 1
        // $car=new Car;
        // $car->name=$request->input('name');
        // $car->description=$request->input('description');
        // $car->founded=$request->input('founded');
        // $car->created_at = now();
        // $car->save();

        // this method caLL $car->save(); inclusive but needs in Model an attribute $fillable=[variables, to, be, passed]
        $car=Car::create([
            'name'=>$request->input('name'),
            'description' => $request->input('description'),
            'founded'=> $request->input('founded')

        ]);


        return redirect('/cars');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        //dd($car);
        //dd($car->engines);
        //var_dump($car->productionDate);
        //var_dump($car->products);
        $products = Product::find($id);

        //dd($products);

        return view('cars.show')->with('car',$car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id)->first();
        return view('cars.edit')->with('car',$car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car=Car::where('id',$id)->
        update([
            'name'=>$request->input('name'),
            'description' => $request->input('description'),
            'founded'=> $request->input('founded')

        ]);

        return redirect('/cars');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //dd($id);
    //     $car=Car::find($id)->first();
    //     $car->delete();
    //     return redirect('/cars');

    // }

    public function destroy($id) // destroy($car) better
    {
        $car=Car::find($id)->first();
        $car->delete();
        // better than the prev. to use less resources
        //$car->delete();
        return redirect('/cars');

    }
}
