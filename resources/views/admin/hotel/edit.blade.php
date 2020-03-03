@extends('admin.layouts.master')

@section('page-title','Update Hotel Booking')

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
    
     <form method="POST" action="{{ route('hotel.update', [$hotel->id]) }}" enctype="multipart/form-data">
@method('patch')
 @csrf
           
   
                  
         <div class="form-body">
         <div class="form-row">
      <!-- Left Column -->
      <div class="col-md-6">
        <div class="col-md-12 mb-3">
          <label >Hotel Name (Eng):</label>
          <input type="text" class="form-control" value="{{$hotel->name_en}}" placeholder="" name="name_en" required="">
               
        </div>
        
        
        <div class="col-md-12 mb-3">
          <label >Address(Eng):</label>
          <input type="text" class="form-control  " value="{{$hotel->address_en}}" placeholder="" name="address_en" required="">
                
        </div>

        <div class="col-md-12 mb-3">
          <label >Description(Eng):</label>
          <input type="text" class="form-control" value="{{$hotel->desc_en}}" placeholder="" name="desc_en" required="">
                
        </div>

        <div class="col-md-12 mb-3">
          <label >Type(Eng):</label>
          <input type="text" class="form-control" value="{{$hotel->type_en}}" placeholder="" name="type_en" required="">
                
        </div>

        <div class="col-md-12 mb-3">
         <label >Price:</label>
         <input type="text" class="form-control  " value="{{$hotel->price}}" placeholder="" name="price" required="">
                
        </div>
        
      
      </div>
      <!-- Right Column -->
      <div class="col-md-6">
        <div class="col-md-12 mb-3">
          <label >Name (Spain):</label>
          <input type="text" class="form-control" value="{{$hotel->name_sp}}" placeholder="" name="name_sp" required="">
                
        </div>
        <div class="col-md-12 mb-3">
          <label >Address(Spain):</label>
          <input type="text" class="form-control  " value="{{$hotel->address_sp}}" placeholder="" name="address_sp" required="">
                
        </div>
        <div class="col-md-12 mb-3">
          <label >Description(Spain):</label>
          <input type="text" class="form-control  " value="{{$hotel->desc_sp}}" placeholder="" name="desc_sp" required="">
                
        </div>
        <div class="col-md-12 mb-3">
          <label >Type(Spain):</label>
          <input type="text" class="form-control" value="{{$hotel->type_sp}}" placeholder="" name="type_sp" required="">
                
        </div>
        
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Hotel Image:</label>
               @if(isset($hotel))
           
           
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="height: 150px;">
                        <img class="abir_image" src="{{asset('images/hotel/'.$hotel->image)}}" alt="logo" />
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




  