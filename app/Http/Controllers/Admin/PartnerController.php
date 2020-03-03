<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;
use Image;
class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['partner']= Partner::orderByDesc('created_at')->get();
        return view('admin.partner.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.partner.create');
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
            'name_en' => 'required',
              'image'  => 'required|image|mimes:jpg,jpeg,png|max:1000'

           ]);
           
    
         $part=new Partner();
         $part->name_en =$request->name_en;
         $part->name_sp =$request->name_sp;
         $part->link = $request->link;
         
          if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
            $dest =public_path('template/images/partner');
            $img = Image::make($files)->resize(184, 138);
            $img->save($dest.'/'.$name);
           
           $part->logo =$name;
        }
        $part->save();
          return redirect('admin/partner')->with('message','Successful Partner Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //partner
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
         $data['partner'] =Partner::find($id);
        return view('admin.partner.edit',$data);
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
        $this->validate($request,[
            'name_en' => 'required'           
        ]);
        $part =Partner::find($id);

          if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/partner');
             
           $img = Image::make($files)->resize(184, 138);
            $img->save($dest.'/'.$name);
           $part->logo =$name;
        }
        $part->name_en =$request->name_en;
        $part->name_sp =$request->name_sp;
        $part->link =$request->link;
       
        $part->status =$request->status;
        $part->save();
         $part->update($request->all());
       return redirect('admin/partner')->with('message','Successful Partner updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Partner::destroy($id);
        return redirect('admin/partner')->with('message','Successful Partner Deleted.');
    }
}
