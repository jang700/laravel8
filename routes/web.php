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

Route::get('/',[FrontController::class,'index']);

Route::get('/hi',[FrontController::class,'hi']);

// Route::get('/hi', function () {
//     $name = 'jang';
//     $age = 18;
//     $gender = 'female';

//     dd(compact('name','age','gender'));
//     return view('hi',compact('name','age','gender'));
// });
