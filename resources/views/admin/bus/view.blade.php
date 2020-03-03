@extends('admin.layouts.master')

@section('page-title','Bus Ticket Detail')

@section('bus','active')
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
        <td><img src="{{asset('images/bus/'.$bustickets->image)}}" width="200px" height="70px"></td>
            <div class="form-row mt-3">
                <div class="col-md-2">
                    <label for=""><b>Name (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$bustickets->name_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Name (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$bustickets->name_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>From (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$bustickets->from_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>From (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$bustickets->from_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>To (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$bustickets->to_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>To (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$bustickets->to_sp}}
                </div>

            </div>
            
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Price</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$bustickets->price}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Time</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$bustickets->time}}
                </div>

            </div>
       
        </div>
    </form>
   
</div>
@endsection




