@extends('admin.layouts.master')

@section('page-title','Car Ticket Detail')

@section('car','active')
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
    
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
<div class="card-body">
    
     <form method="POST" action="" enctype="multipart/form-data">
@method('patch')
 @csrf
           
   
                  
        <div class="form-body">
        <td><img src="{{asset('images/car/'.$cartickets->image)}}" width="200px" height="70px"></td>
            <div class="form-row mt-3">
                <div class="col-md-2">
                    <label for=""><b>Car Type (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$cartickets->car_type_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Car Type (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$cartickets->car_type_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Seat</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$cartickets->seat_no}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Journey Type (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$cartickets->journey_type_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Journey Type(Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$cartickets->journey_type_sp}}
                </div>

            </div>
                        
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Price</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$cartickets->price}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Time</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$cartickets->time}}
                </div>

            </div>
       
        </div>
    </form>
   
</div>
@endsection




