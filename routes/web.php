<?php

//use App\Http\Controllers\MarketsController;

use App\Http\Controllers\MarketsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [PagesController::class,'index']);
Route::get('/home', [HomeController::class,'show']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/posts',[PostsController::class,'index']);
Route::get('/markets', [MarketsController::class,'index']);

// from resource controller
Route::resource('/cars', CarsController::class);