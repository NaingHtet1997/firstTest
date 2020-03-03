@extends('admin.layouts.master')

 @section('page-title','Update New Travelinspiration')
@section('content')
@if(Session::has('success'))
<p class="alert alert-success">{{Session::get('success')}}</p>
@endif
<div class="card-body">
    
  <form action="{{route('inspiration.update',['id'=>$travel->id])}}" enctype="multipart/form-data" method="POST">
    @method('patch')
                  @csrf       
         <div class="form-body">
            <div class="form-row">
              <div class="col-md-12">
              <div class="row">
            <div class="col-md-6">
                <label for="validationCustom01">Title_En:</label>
                <input type="text" class="form-control" id="validationCustom01" value="{{$travel->title_en}}" placeholder="Enter  Title" name="title_en" required="">  
            </div>
              @error("title_en")
  <small class="text-primary">{{$message}}</small>
  @enderror
             <div class="col-md-6">
                <label for="validationCustom01">Title_Sp:</label>
                <input type="text" class="form-control" id="validationCustom01" value="{{$travel->title_en}}" placeholder="Enter  Title" name="title_sp" required="">
                
            </div>
              @error("title_sp")
  <small class="text-primary">{{$message}}</small>
  @enderror
          </div>
        </div>
             <div class="col-md-12 mb-3">
                <label for="validationCustom01"> Description_En:</label>
               <textarea id="desc" class="form-control" rows="15" name="desc_en">{{$travel->desc_en}}</textarea>
               
              </div>
                @error("desc_en")
  <small class="text-primary">{{$message}}</small>
  @enderror

              <div class="col-md-12 mb-3">
                <label for="validationCustom01"> Description_Sp:</label>
               <textarea id="desc1" class="form-control" rows="15" name="desc_sp">{{$travel->desc_sp}}</textarea>
               
              </div>
  @error("desc_sp")
  <small class="text-primary">{{$message}}</small>
  @enderror
               <div class="col-md-12 mb-3">
                <label for="validationCustom01">Image:</label>
            <div class="col-md-12 mb-3">
                <label for="validationCustom01">Image:</label>
               @if(isset($travel))
           
           
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="height: 150px;">
                        <img class="abir_image" src="{{asset('template/images/inspiration/'.$travel->image)}}" alt="">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-height: 150px;"></div>
                    <div>
                        <span class="btn btn-success btn-file">
                            <span class="fileinput-new"> Select File:</span>
                            <span class="fileinput-exists"> Change </span>
                            <input type="file" name="image" value="user-default.png">
                            </span>
                            
                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>

                        </div>
                    </div>
                    @if($errors->has('image'))
    <div class="error">{{ $errors->first('image') }}</div>
@endif
            @else
            @include('admin.inspiration.image_upload')
            @endif
              </div>
            </div>
              
           <div class="col-md-12 mb-3"> <div class="form-check">
                         <input type="hidden" value="" name="created_by"> 

                         <input  type="hidden" name="status" value="0">
                        <input  type="checkbox" class="cr-styled" name="status" value="1" >
                      <label class="form-check-label" name="status" for="defaultCheck1">
                        Status
                      </label>
                    </div>  
                   
                </div>

        </div>
         </div>
                <div class="modal-footer">
                  <a href="/inspiration" class="btn btn-primary">Cancel</a>
                  <input type="submit" class="btn btn-success " value="Save">
                  </div>
                </div>
              </form>
   
</div>
@endsection
@push('page_scripts')

 <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<script type="text/javascript">

      CKEDITOR.replace( 'desc', {
        filebrowserUploadMethod: 'form'
    });
       CKEDITOR.replace( 'desc1', {
       
        filebrowserUploadMethod: 'form'
    });

</script>

@endpush



