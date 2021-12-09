<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    public function index() 
    {
        return view('index');

    }
    public function hi()
    {
        $name = 'jang';
        $age = 18;
        $gender = 'female';
    
        // dd(compact('name','age','gender'));
        // return view('hi',['name' => $name,'age' => $age,'gender' => $gender]);
        return view('hi',compact('name','age','gender'));
    }

    public function news()
    {   
        $news = DB::table('news')->get();
        // dd($news);
        return view('news',compact('news'));
    }

    public function newsContent($id) 
    {
        // $news = DB::table('news')->where('id',$id)->first();
        // dd($news->title);

        $news = DB::table('news')->find($id);
        return view('news-content',compact('news'));
    }
    
    
}
