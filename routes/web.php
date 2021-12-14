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
Route::get('/create-news',[FrontController::class,'createNews']);
Route::get('/store-news',[FrontController::class,'storeNews']);


Route::get('/update-news/{id}',[FrontController::class,'updateNews']);

Route::get('/destroy-news/{id}',[FrontController::class,'destroyNews']);

Route::post('/contact',[FrontController::class,'contact']);

// 作業 試做
Route::get('/product',[FrontController::class,'product']);

  
//     return view('hi',compact('name','age','gender'));


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
