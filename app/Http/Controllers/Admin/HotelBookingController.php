<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HotelBooking;
use Image;

class HotelBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = HotelBooking::paginate(10);
        return view("admin.hotel.list",compact("hotel"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $hotel = new HotelBooking();

        if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/hotel');
            $img = Image::make($files)->resize(184, 138);
            $img->save($dest.'/'.$name);
            $files->move($dest,$name);
           $hotel->image =$name;
        }

        $hotel->name_en     =$request->name_en;
        $hotel->name_sp     =$request->name_sp;
        $hotel->address_en  =$request->address_en;
        $hotel->address_sp  =$request->address_sp;
        $hotel->desc_en     =$request->desc_en;
        $hotel->desc_sp     =$request->desc_sp;
        $hotel->type_en     =$request->type_en;
        $hotel->type_sp     =$request->type_sp;
        $hotel->price       =$request->price;
        
        $hotel->save();
        return redirect('admin/hotel')->with('success','Successful Hotel Booking Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = HotelBooking::find($id);
        return view("admin.hotel.view",compact("hotel"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = HotelBooking::find($id);
        return view("admin.hotel.edit",compact("hotel"));
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
        $hotel = HotelBooking::find($id);

        if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/hotel');
            $files->move($dest,$name);

           $hotel->image =$name;
        }

        $hotel->name_en     =$request->name_en;
        $hotel->name_sp     =$request->name_sp;
        $hotel->address_en  =$request->address_en;
        $hotel->address_sp  =$request->address_sp;
        $hotel->desc_en     =$request->desc_en;
        $hotel->desc_sp     =$request->desc_sp;
        $hotel->type_en     =$request->type_en;
        $hotel->type_sp     =$request->type_sp;
        $hotel->price       =$request->price;        
        $hotel->save();
        $hotel->update($request->all());
        return redirect('admin/hotel')->with('success','Successful Hotel Booking updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HotelBooking::destroy($id);
        return back()->with('success','Successful Deleted.');
    }
}
