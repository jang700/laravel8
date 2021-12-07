<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
