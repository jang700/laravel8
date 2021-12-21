<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::get();
        return view('admin.news.index',compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }
    
       
    public function store(Request $request)
    {
        News::create($request->all());
        return redirect()->route('news.index');
    }
         // $request接creat的資料
         // redirect重新導向


    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit',compact('news'));
    }
    // compact帶資料出去


    public function update($id,Request $request)
    {
        News::find($id)->update($request->all());
        return redirect()->route('news.index');
    }

    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect()->route('news.index');
    }


    
}
