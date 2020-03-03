@extends('admin.layouts.master')
@if(isset($partner))
@section('page-title','Update Partner')
@else
@section('page-title','Create Partner')
@endif
@section('partner','active')
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
    
     <form  enctype="multipart/form-data" action="{{url('admin/partner')}}"  method="POST">
        @method('POST')
        @csrf
        <div class="form-body">
          <div class="form-row">
            <div class="col-md-12 mb-3">
             
                  <label for="validationCustom01">Company Name(EN):</label>
                  <input type="text" class="form-control  {{ $errors->has('name_en') ? 'has-error' : '' }}" id="validationCustom01" value="" placeholder="Enter Company Name(EN):" name="name_en" required="">
                  <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    
            
            </div>
             <div class="col-md-12 mb-3">
             
                  <label for="validationCustom01">Company Name(SP):</label>
                  <input type="text" class="form-control  {{ $errors->has('name_sp') ? 'has-error' : '' }}" id="validationCustom01" value="" placeholder="Enter Company Name(SP):" name="name_sp" required="">
                  <span class="text-danger">{{ $errors->first('name_sp') }}</span>
                    
            
            </div>
            <div class="col-md-12 mb-3">
              <label for="validationCustom01">Companay Website:</label>
              <input type="text" class="form-control  {{ $errors->has('link') ? 'has-error' : '' }}" id="validationCustom01" value="" placeholder="Enter Companay Website:" name="link" required="">
              <span class="text-danger">{{ $errors->first('link') }}</span>
            </div>
           
           

            <div class="col-md-12 mb-3">
              <label for="validationCustom01"> Image:</label>
                  @include('admin.img_upload')
            </div>

            <div class="col-md-12 mb-3"> 
              <div class="form-check">
                <input  type="hidden" name="status" value="0">
                <input  type="checkbox" class="cr-styled" name="status" value="1" >
                <label class="form-check-label" name="status" for="defaultCheck1">Status</label>
                </div>  
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
@component('component.admin.partner')

 @endcomponent
@endsection




