<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/news', function () {
//        return view('news');
// });

Route::get('/',[FrontController::class,'index']);


Route::get('/hi',[FrontController::class,'hi']);

Route::get('/news',[FrontController::class,'news']);

Route::get('/news/{id}',[FrontController::class,'newsContent']);


  
//     return view('hi',compact('name','age','gender'));
