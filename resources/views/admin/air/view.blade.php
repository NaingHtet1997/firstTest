@extends('admin.layouts.master')

@section('page-title','Air Ticket Detail')

@section('air','active')
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
        <td><img src="{{asset('images/air/'.$airtickets->image)}}" width="200px" height="70px"></td>
            <div class="form-row mt-3">
                <div class="col-md-2">
                    <label for=""><b>Name (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$airtickets->name_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Name (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$airtickets->name_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>From (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$airtickets->from_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>From (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$airtickets->from_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>To (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$airtickets->to_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>To (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$airtickets->to_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Journey Type (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$airtickets->journey_type_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Journey Type (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$airtickets->journey_type_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Price</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$airtickets->price}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Time (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$airtickets->time}}
                </div>

            </div>
       
        </div>
    </form>
   
</div>
@endsection




