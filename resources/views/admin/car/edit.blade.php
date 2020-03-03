@extends('admin.layouts.master')

@section('page-title','Update Car')

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
    
     <form method="POST" action="{{ route('car.update', [$cartickets->id]) }}" enctype="multipart/form-data">
@method('patch')
 @csrf
           
   
                  
         <div class="form-body">
         <div class="form-row">
      <!-- Left Column -->
      <div class="col-md-6">
      <div class="col-md-12 mb-3">
          <label for="validationCustom01">Car Type(Eng):</label>
          <input type="text" class="form-control" value="{{$cartickets->car_type_en}}" placeholder="" name="car_type_en" required="">
               
        </div>
        
        
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Journey(Eng):</label>
          <input type="text" class="form-control  " value="{{$cartickets->journey_type_en}}" placeholder="" name="journey_type_en" required="">
                
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Number of Seat:</label>
          <input type="text" class="form-control" value="{{$cartickets->seat_no}}" placeholder="" name="seat_no" required="">
                
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Time:</label>
          <input type="text" class="form-control  " value="{{$cartickets->time}}" placeholder="" name="time" required="">
                
        </div>
        
      
      </div>
      <!-- Right Column -->
      <div class="col-md-6">
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Car Type(Spain):</label>
          <input type="text" class="form-control" value="{{$cartickets->car_type_sp}}" placeholder="" name="car_type_sp" required="">
                
        </div>
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Journey(Spain):</label>
          <input type="text" class="form-control  " value="{{$cartickets->journey_type_sp}}" placeholder="" name="journey_type_sp" required="">
                
        </div>
      <div class="col-md-12 mb-3">
         <label for="validationCustom01">Price:</label>
         <input type="text" class="form-control  " value="{{$cartickets->price}}" placeholder="" name="price" required="">
                
        </div>
        
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Car Image:</label>
               @if(isset($cartickets))
           
           
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="height: 150px;">
                        <img class="abir_image" src="{{asset('images/car/'.$cartickets->image)}}" alt="logo" />
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-height: 150px;"></div>
                    <div>
                            <span class="btn btn-success btn-file">
                            <span class="fileinput-new"> Select File </span>
                            <span class="fileinput-exists"> Change </span>
                            <input type="file" name="profile" value="user-default.png">
                            </span>
                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                    </div>
                    </div>
                    @if($errors->has('image'))
                      <div class="error">{{ $errors->first('image') }}</div>
                    @endif
            @else
            @include('admin.img_upload')
            @endif

            
              </div>
      
      </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
        <input type="submit" class="btn btn-success " value="Save">
      </div>
                </div>
              </form>
   
</div>
@endsection




  