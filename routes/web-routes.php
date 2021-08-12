<?php

use App\Http\Controllers\MarketsController;
use Illuminate\Contracts\Console\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Psy\Command\WhereamiCommand;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome.blade.php');
}); */

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/market', [App\Http\Controllers\HomeController::class, 'getMarket'])->name('market');


/* Custom Routes */

// laravel 8

// Route::get('/market', function () {
//     return view('Markets.index');
// });
Route::get('/market',[App\Http\Controllers\MarketsController::class,'index']);

Route::get('/market','App\Http\Controllers\MarketsController@index');
//Route::get('/market/{name}',[App\Http\Controllers\MarketsController::class,'show']);

// pattern is integer
// Route::get('/market/{id}',[App\Http\Controllers\MarketsController::class,'show'])->
// where('id','[0-9]+');

// pattern is string
// Route::get('/market/{name}',[App\Http\Controllers\MarketsController::class,'show'])->
// where('name','[a-zA-Z]+');

// pattern string/integer order is important
Route::get('/market/{name}/{id}',[App\Http\Controllers\MarketsController::class,'show'])->
where(['name'=>'[a-zA-Z]+',
        'id'=>'[0-9]+'
]);