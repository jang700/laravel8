<?php

namespace App\Http\Controllers;

use App\Models\facility;
use App\Models\Facility as ModelsFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        // 降冪desc 升冪asc
        // $facilities = Facility::get();
        $facilities = Facility::orderBy('title','desc')->get();
        // dd($facilities);
        return view('admin.facility.index',compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 上面這一包$request是檔案，所以不能用all，要一個個寫
        
        // $path = 得到相對於local(storage/app)資料夾路徑
        // Storage::put('路徑'，'檔案');
        $path = Storage::put('/', $request->image_url);
        
        Facility::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'image_url'=> $path
        ]);
        return redirect()->route('facility.index');

        // 改好env...之後,使用Storage::url可拿到絕對路徑
        // $url = Storage::url($path);
        // Storage::delete($path);
        // dd( $path,$url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facility = Facility::find($id);

        return view('admin.facility.edit',compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $facility = Facility::find($id);
        // 判斷是否有圖片
        // $request->hasFile(name)
        if($request->hasFile('image_url')){
            // 刪除舊圖片
            storage::delete($facility->image_url);
            // 儲存新圖片
            $path = storage::put('/',$request->image_url);
        }else{
            $path = $facility->image_url;
        }
        
        $facility->update([
            'title'=> $request->title,
            'content'=> $request->content,
            'image_url'=> $path
        ]);

        // ->update($request->all());
        return redirect()->route('facility.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 先找到要刪除的資料
        $facility = Facility::find($id);
        // 取出圖片檔案的位置，並刪除圖片
        Storage::delete($facility->image_url);
        // 刪除資料庫該筆資料
        $facility->delete();
        return redirect()->route('facility.index');
        // return redirect()->route('admin/facility');
    }

        // Facility::find($id)->delete();
        // return redirect()->route('admin.facility');
}
