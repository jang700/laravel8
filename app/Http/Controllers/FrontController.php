<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    //
    public function index() 
    {
        return view('index');
    }


    public function newsList()
    {   
        $news = News::get();
        return view('front.news.list',compact('news'));
    }


    public function newsContent($id) 
    {
        // $news = DB::table('news')->where('id',$id)->first();
        $news = News::find($id);
        return view('front.news.content',compact('news'));
    }
    
    public function facility()
    {
        $facilities = Facility::get();

        return view('front.facility.index',compact('facilities'));
    }

    public function contact(Request $request) 
    {
        $validator = Validator::make(request()->all(), [
            'name'=> 'max:50',
            'email'=> 'email',
    
            
            'g-recaptcha-response' => 'recaptcha',
            // recaptchaFieldName() => recaptchaRuleName()
        ]);
        
        // check if validator fails
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        return redirect()->route('index');  
        // return 'success';  
    }

    
}
