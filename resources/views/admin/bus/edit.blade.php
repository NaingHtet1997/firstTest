@extends('admin.layouts.master')

@section('page-title','Update Bus Tickets')

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
    
     <form method="POST" action="{{ route('bus.update', [$bustickets->id]) }}" enctype="multipart/form-data">
@method('patch')
 @csrf
           
   
                  
         <div class="form-body">
         <div class="form-row">
      <!-- Left Column -->
      <div class="col-md-6">
      <div class="col-md-12 mb-3">
          <label for="validationCustom01">Name (Eng):</label>
          <input type="text" class="form-control" value="{{$bustickets->name_en}}" placeholder="" name="name_en" required="">
               
        </div>
        
        
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">From(Eng):</label>
          <input type="text" class="form-control  " value="{{$bustickets->from_en}}" placeholder="" name="from_en" required="">
                
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationCustom01">To(Eng):</label>
          <input type="text" class="form-control" value="{{$bustickets->to_en}}" placeholder="" name="to_en" required="">
                
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Time:</label>
          <input type="text" class="form-control  " value="{{$bustickets->time}}" placeholder="" name="time" required="">
                
        </div>
        
      
      </div>
      <!-- Right Column -->
      <div class="col-md-6">
      <div class="col-md-12 mb-3">
          <label for="validationCustom01">Name (Spain):</label>
          <input type="text" class="form-control" value="{{$bustickets->name_sp}}" placeholder="" name="name_sp" required="">
                
        </div>
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">From(Spain):</label>
          <input type="text" class="form-control  " value="{{$bustickets->from_sp}}" placeholder="" name="from_sp" required="">
                
        </div>
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">To(Spain):</label>
          <input type="text" class="form-control  " value="{{$bustickets->to_sp}}" placeholder="" name="to_sp" required="">
                
        </div>
      <div class="col-md-12 mb-3">
         <label for="validationCustom01">Price:</label>
         <input type="text" class="form-control  " value="{{$bustickets->price}}" placeholder="" name="price" required="">
                
        </div>
        
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Bus Image:</label>
               @if(isset($bustickets))
           
           
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="height: 150px;">
                        <img class="abir_image" src="{{asset('images/bus/'.$bustickets->image)}}" alt="logo" />
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




