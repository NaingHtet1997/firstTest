<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AirTicket;
use Image;

class AirTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airtickets = AirTicket::paginate(10);
        return view("admin.air.list",compact("airtickets"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.air.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $airticket = new AirTicket();
        if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/air');
            $img = Image::make($files)->resize(184, 138);
            $img->save($dest.'/'.$name);
            $files->move($dest,$name);
           $airticket->image =$name;
        }

        $airticket->name_en         =$request->name_en;
        $airticket->name_sp         =$request->name_sp;
        $airticket->from_en         =$request->from_en;
        $airticket->from_sp         =$request->from_sp;
        $airticket->to_en           =$request->to_en;
        $airticket->to_sp           =$request->to_sp;
        $airticket->journey_type_en =$request->journey_type_en;
        $airticket->journey_type_sp =$request->journey_type_sp;
        $airticket->price           =$request->price;
        $airticket->time            =$request->time;
        $airticket->save();
        return redirect('admin/air')->with('success','Successful Air Tickets Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $airtickets = AirTicket::find($id);
        return view("admin.air.view",compact("airtickets"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $airtickets=  AirTicket::find($id);
        return view("admin.air.edit",compact("airtickets"));
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
        $airticket=AirTicket::find($id); 
        if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/air');
            $files->move($dest,$name);

           $airticket->image =$name;
        }

        $airticket->name_en         =$request->name_en;
        $airticket->name_sp         =$request->name_sp;
        $airticket->from_en         =$request->from_en;
        $airticket->from_sp         =$request->from_sp;
        $airticket->to_en           =$request->to_en;
        $airticket->to_sp           =$request->to_sp;
        $airticket->journey_type_en =$request->journey_type_en;
        $airticket->journey_type_sp =$request->journey_type_sp;
        $airticket->price           =$request->price;
        $airticket->time            =$request->time;
        $airticket->save();
        $airticket->update($request->all());
        return redirect('admin/air')->with('success','Successful AirTickets Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AirTicket::destroy($id);
        return back()->with('success','Successful Deleted.');
    }
}
