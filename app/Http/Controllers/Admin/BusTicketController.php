<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BusTicket;
use Image;

class BusTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bustickets = BusTicket::paginate(10);
        return view("admin.bus.list",compact("bustickets"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $busticket = new BusTicket();
        $busticket->name_en     =$request->name_en;
        $busticket->name_sp     =$request->name_sp;
        $busticket->from_en     =$request->from_en;
        $busticket->from_sp     =$request->from_sp;
        $busticket->to_en       =$request->to_en;
        $busticket->to_sp       =$request->to_sp;
        $busticket->price       =$request->price;
        $busticket->time        =$request->time;
        if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/bus');
            $img = Image::make($files)->resize(184, 138);
            $img->save($dest.'/'.$name);
            $files->move($dest,$name);
           $busticket->image =$name;
        }
        
        $busticket->save();
        return redirect('admin/bus')->with('success','Successful Car Tickets Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bustickets = BusTicket::find($id);
        return view("admin.bus.view",compact("bustickets"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bustickets = BusTicket::find($id);
        return view("admin.bus.edit",compact("bustickets"));
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
        $busticket =BusTicket::find($id);

        if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/bus');
            $files->move($dest,$name);

           $busticket->image =$name;
        }
        
        $busticket->name_en     =$request->name_en;
        $busticket->name_sp     =$request->name_sp;
        $busticket->from_en     =$request->from_en;
        $busticket->from_sp     =$request->from_sp;
        $busticket->to_en       =$request->to_en;
        $busticket->to_sp       =$request->to_sp;
        $busticket->price       =$request->price;
        $busticket->time        =$request->time;

        
        $busticket->save();
        $busticket->update($request->all());
        return redirect('admin/bus')->with('success','Successful BusTickets updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BusTicket::destroy($id);
        return back()->with('success','Successful Deleted.');
    }
}
