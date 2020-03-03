@extends('admin.layouts.master')
@if(isset($blog))
@section('page-title','Update Hotel Tickets')
@else
@section('page-title','Create Hotel Tickets')
@endif
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
    
  <form  enctype="multipart/form-data" action="{{route('hotel.store')}}"  method="POST">
                  @method('post')
                  @csrf
    <div class="form-body">
      <div class="form-row">
      <!-- Left Column -->
      <div class="col-md-6">
        <div class="col-md-12 mb-3">
          <label >Hotel Name (Eng):</label>
          <input type="text" class="form-control" value="" placeholder="" name="name_en" required="">
               
        </div>
        
        
        <div class="col-md-12 mb-3">
          <label >Address(Eng):</label>
          <input type="text" class="form-control  " value="" placeholder="" name="address_en" required="">
                
        </div>

        <div class="col-md-12 mb-3">
          <label >Description(Eng):</label>
          <input type="text" class="form-control" value="" placeholder="" name="desc_en" required="">
                
        </div>

        <div class="col-md-12 mb-3">
          <label >Type(Eng):</label>
          <input type="text" class="form-control" value="" placeholder="" name="type_en" required="">
                
        </div>

        <div class="col-md-12 mb-3">
         <label >Price:</label>
         <input type="text" class="form-control  " value="" placeholder="" name="price" required="">
                
        </div>
        
      
      </div>
      <!-- Right Column -->
      <div class="col-md-6">
        <div class="col-md-12 mb-3">
          <label >Name (Spain):</label>
          <input type="text" class="form-control" value="" placeholder="" name="name_sp" required="">
                
        </div>
        <div class="col-md-12 mb-3">
          <label >Address(Spain):</label>
          <input type="text" class="form-control  " value="" placeholder="" name="address_sp" required="">
                
        </div>
        <div class="col-md-12 mb-3">
          <label >Description(Spain):</label>
          <input type="text" class="form-control  " value="" placeholder="" name="desc_sp" required="">
                
        </div>
        <div class="col-md-12 mb-3">
          <label >Type(Spain):</label>
          <input type="text" class="form-control" value="" placeholder="" name="type_sp" required="">
                
        </div>
        
        <div class="col-md-12 mb-3">
          <label >Hotel Image:</label>
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




