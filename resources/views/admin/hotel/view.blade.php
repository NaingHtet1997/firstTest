@extends('admin.layouts.master')

@section('page-title','Hotel Detail')

@section('hotel','active')
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
        <td><img src="{{asset('images/hotel/'.$hotel->image)}}" width="200px" height="70px"></td>
            <div class="form-row mt-3">
                <div class="col-md-2">
                    <label for=""><b>Name (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$hotel->name_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Name (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$hotel->name_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Address (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$hotel->address_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Address (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$hotel->address_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Description (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$hotel->desc_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Description (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$hotel->desc_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Type (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$hotel->type_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Type (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$hotel->type_sp}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Price</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$hotel->price}}
                </div>

            </div>
       
        </div>
    </form>
   
</div>
@endsection




