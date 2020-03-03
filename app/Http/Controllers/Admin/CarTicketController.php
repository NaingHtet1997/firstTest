<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CarTicket;
use Image;
class CarTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartickets = CarTicket::paginate(10);
        return view("admin.car.list",compact("cartickets"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $carticket = new CarTicket();
        if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/car');
            $img = Image::make($files)->resize(184, 138);
            $img->save($dest.'/'.$name);
            $files->move($dest,$name);
           $carticket->image =$name;
        }
        $carticket->car_type_en     =$request->car_type_en;
        $carticket->car_type_sp     =$request->car_type_sp;
        $carticket->seat_no         =$request->seat_no;
        $carticket->journey_type_en =$request->journey_type_en;
        $carticket->journey_type_sp =$request->journey_type_sp;
        $carticket->price           =$request->price;
        $carticket->time            =$request->time;
        $carticket->save();
        return redirect('admin/car')->with('success','Successful Car Tickets Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cartickets = CarTicket::find($id);
        return view("admin.car.view",compact("cartickets"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cartickets = CarTicket::find($id);
        return view("admin.car.edit",compact("cartickets"));
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
        
        $carticket = CarTicket::find($id);
        if($files=$request->file('image')){
            $name=uniqid().'_'.$files->getClientOriginalName();
           
            $dest =public_path('template/images/car');
            $files->move($dest,$name);

           $carticket->image =$name;
        }

        $carticket->car_type_en     =$request->car_type_en;
        $carticket->car_type_sp     =$request->car_type_sp;
        $carticket->seat_no         =$request->seat_no;
        $carticket->journey_type_en =$request->journey_type_en;
        $carticket->journey_type_sp =$request->journey_type_sp;
        $carticket->price           =$request->price;
        $carticket->time            =$request->time;
        $carticket->save();
        $carticket->update($request->all());
        return redirect('admin/car')->with('success','Successful CarTickets updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CarTicket::destroy($id);
        return back()->with('success','Successful Deleted.');
    }
}
