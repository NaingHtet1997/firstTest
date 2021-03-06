@extends('admin.layouts.master')

@section('page-title','Update Blog')

@section('blog','active')
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
     <form method="POST" action="{{ url('admin/partner/'.$partner->id) }}" enctype="multipart/form-data">
      @method('patch')
      @csrf
         
         <div class="form-body">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Company Name(EN):</label>
                <input type="text" class="form-control" id="validationCustom01" value="{{$partner->name_en}}" placeholder="Company Name (EN)" name="name_en" required="">
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Company Name(SP):</label>
                <input type="text" class="form-control" id="validationCustom01" value="{{$partner->name_sp}}" placeholder="Enter Company Name(SP)" name="name_sp" required="">
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Company Website:</label>
                <input type="text" class="form-control" id="validationCustom01" value="{{$partner->link}}" placeholder="Website" name="link" required="">
              </div>
                
            
             

               <div class="col-md-12 mb-3">
                <label for="validationCustom01">Image:</label>
                @if(isset($partner))
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="height: 150px;">
                        <img class="abir_image" src="{{asset('template/images/partner/'.$partner->logo)}}" alt="logo" />
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

               <div class="col-md-12 mb-3"> <div class="form-check">
                      

                         <input  type="hidden" name="status" value="0">
                        <input  type="checkbox" class="cr-styled" name="status" value="1" @if($partner->status == 1) checked @else @endif>
                      
                      <label class="form-check-label" name="status" for="defaultCheck1">
                        Status
                      </label>
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




