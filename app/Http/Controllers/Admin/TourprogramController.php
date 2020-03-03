<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tourprogram;
use Image;
class TourprogramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['tourprograms']=Tourprogram::orderByDesc('created_at')->paginate(4);
        
        return view('admin.tourprogram.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tourprogram.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'title_en' => 'required',
            'desc_en' =>'required'           
        ]);
        //
        $tourprogram = new Tourprogram();
        $tourprogram->title_en =$request->title_en;
        $tourprogram->title_sp=$request->title_sp;
        $tourprogram->subtitle_en=$request->subtitle_en;
        $tourprogram->subtitle_sp=$request->subtitle_sp;
        $tourprogram->author_en=$request->author_en;
        $tourprogram->author_sp=$request->author_sp;
        $tourprogram->desc_en=$request->desc_en;
        $tourprogram->desc_sp=$request->desc_sp;
        $tourprogram->created_by=auth()->user()->id;

        if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/tourprogram');
            $img = Image::make($files)->resize(184, 138);
            $img->save($dest.'/'.$name);
            $files->move($dest,$name);
           $tourprogram->thumbnail =$name;
        }
        $tourprogram->save();
        return redirect('admin/tourprogram')->with('message','Successful Tourprogram Added.');
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
        //
          $data['tourprogram'] =Tourprogram::find($id);
        return view('admin.tourprogram.edit',$data);
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
        //
        
        $tourprogram =Tourprogram::find($id);
    


          if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/tourprogram');
            $files->move($dest,$name);

           $tourprogram->thumbnail =$name;
        }
        
        $tourprogram->title_en=$request->title_en;
        $tourprogram->title_sp=$request->title_sp;
        $tourprogram->subtitle_en =$request->subtitle_en;
        $tourprogram->subtitle_sp =$request->subtitle_sp;
         $tourprogram->subtitle_en=$request->author_en;
        $tourprogram->subtitle_sp=$request->author_sp;
        $tourprogram->desc_en =$request->desc_en;
        $tourprogram->desc_sp =$request->desc_sp;
        $tourprogram->save();
         $tourprogram->update($request->all());
          return redirect('admin/tourprogram')->with('message','Successful Tourprogram updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Tourprogram::destroy($id);
         return back()->with('message','Successful delete tourprogram');
    }
}
