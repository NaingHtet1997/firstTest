<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelInspiration;
use Image;
class TravelController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data['travels']=\App\TravelInspiration::orderByDesc('created_at')->paginate(5);
      
        return view("admin.inspiration.inspiration",$data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $data['travel'] = TravelInspiration::get();
        return view('admin.inspiration.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $request->validate([
        "title_en"=>"required",
        "title_sp"=>"required",
        "desc_en"=>"required",
        "desc_sp"=>"required",
        'image'  => 'required|image|mimes:jpg,jpeg,png|max:2000'
        ]);
        $travel=new TravelInspiration();
        $travel->title_en=$request->title_en;
        $travel->title_sp=$request->title_sp;
        $travel->desc_en=$request->desc_en;
        $travel->desc_sp=$request->desc_sp;
       
      if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
            $dest =public_path('template/images/inspiration');
            $img = Image::make($files)->resize(1349, 650);
            $img->save($dest.'/'.$name);
           
           $travel->image =$name;
        }

        $travel->save();
     return redirect('admin/inspiration')->with('success','Successful Travel Inspiration Added.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data['travel'] = TravelInspiration::find($id);
        return view('admin.inspiration.add',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['travel'] = TravelInspiration::find($id);
        return view('admin.inspiration.update',$data);
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
        $request->validate([
        "title_en"=>"required",
        "title_sp"=>"required",
          "desc_en"=>"required",
            "desc_sp"=>"required",
      
        ]);
       
     $update = TravelInspiration::find($id);
      $update->title_en=$request->title_en;
        $update->title_sp=$request->title_sp;
        $update->desc_en=$request->desc_en;
        $update->desc_sp=$request->desc_sp;
        
    if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
            $dest =public_path('template/images/inspiration');
            $img = Image::make($files)->resize(1349, 650);
            $img->save($dest.'/'.$name);
           $update->image =$name;
        }

    $update ->save();
 return redirect('admin/inspiration')->with('success','Successful Travel Inspiration Update.'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TravelInspiration::destroy($id);
        return redirect('admin/inspiration')->with('success','Successful Travel Inspiration Delete.'); 
    }
}
