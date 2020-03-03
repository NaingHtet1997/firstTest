@extends('admin.layouts.master')
@if(isset($blog))
@section('page-title','Update Car Tickets')
@else
@section('page-title','Create Car Tickets')
@endif
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
    
  <form  enctype="multipart/form-data" action="{{route('car.store')}}"  method="POST">
                  @method('post')
                  @csrf
    <div class="form-body">
      <div class="form-row">
      <!-- Left Column -->
      <div class="col-md-6">
      <div class="col-md-12 mb-3">
          <label for="validationCustom01">Car Type(Eng):</label>
          <input type="text" class="form-control" value="" placeholder="" name="car_type_en" required="">
               
        </div>
        
        
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Journey(Eng):</label>
          <input type="text" class="form-control  " value="" placeholder="" name="journey_type_en" required="">
                
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Number of Seat:</label>
          <input type="text" class="form-control" value="" placeholder="" name="seat_no" required="">
                
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Time:</label>
          <input type="text" class="form-control  " value="" placeholder="" name="time" required="">
                
        </div>
        
      
      </div>
      <!-- Right Column -->
      <div class="col-md-6">
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Car Type(Spain):</label>
          <input type="text" class="form-control" value="" placeholder="" name="car_type_sp" required="">
                
        </div>
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Journey(Spain):</label>
          <input type="text" class="form-control  " value="" placeholder="" name="journey_type_sp" required="">
                
        </div>
      <div class="col-md-12 mb-3">
         <label for="validationCustom01">Price:</label>
         <input type="text" class="form-control  " value="" placeholder="" name="price" required="">
                
        </div>
        
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Car Image:</label>
           @include('admin.img_upload')
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




