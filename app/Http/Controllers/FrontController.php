<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    public function index() 
    {
        return view('welcome');
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

    // public function news()
    // {
    //     return view('news');
    // }

    public function news()
    {   
        // $news = DB::table('news')->get();
        $news = News::get();
        // dd($news);
        return view('news-list',compact('news'));
    }

    public function newsContent($id) 
    {
        // $news = DB::table('news')->where('id',$id)->first();
        // dd($news->title);

        // $news = DB::table('news')->find($id);
        $news = News::find($id);
        return view('news-content',compact('news'));
    }

    public function createNews()
    {
        News::create([
            'title'=>'獨自開飛機環遊世界！比利時19歲女計畫13日飛抵台灣',
            'date'=>'1212-12-13',
            'content'=>'張唐鳳簡報上的地圖，將台灣和中國標示為不同顏色。據了解這是南非一個非政府組織，根據各國公民權利的開放程度，進行排名的彩色地圖，台灣被標示綠色，成為亞洲地區唯一被稱為開放的國家；中國大陸被標示代表封閉的紅色。美國國務院表示，螢幕共享的混亂，導致唐鳳的畫面被刪除，國務院說這是無心之過。國務院發言人表示，重視唐鳳參與，凸顯台灣在透明治理、人權和打擊假資訊等議題上的世界級專業知識。',
            'image_url'=>'https://obs.line-scdn.net/0hIB7AYFqwFm0KOAG_zelpOjJuGhw5XgxkKAlRWywxHFx0FAM-YglFDi8wGkF3CAJuKlsKA3s-GlQmCVU9Ng/w1200',
        ]);
        return 'success';
    }

    public function updateNews($id)
    {
        News::find($id)->update([
            'title'=>'尼加拉瓜斷交吳鳳點名台灣',
            'date'=>'1209-12-12',
        ]);
        return 'update success';
    }
    
    public function destroyNews($id) 
    {
        News::find($id)->delete();
        return 'delete success';
    }

    public function contact(Request $request) 
    {
        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        return 'success';

        // dd($request->all());
    }

    // 1214新增一頁最新消息
   

    public function product()
    {
        Product::get();
        return view('product');
    }

    public function createProduct()
    {
        Product::create([
            'title'=>'2021臺北國際賞鳥博覽會',
            'date'=>'1212-12-13',
            'content'=>'今年（2021）因為疫情影響，臺北國際賞鳥博覽會轉為線上活動，本屆主題是「成為野鳥的守護天使」。臺北市動物保護處與主辦單位台北市野鳥學會合作一系列線上活動，期盼民眾能夠線上參與延續鳥博精神！',
            'image_url'=>'https://www.flickr.com/photos/teia/50511607051/in/dateposted/',
        ]);
        return 'Product success';
    }
    
}
