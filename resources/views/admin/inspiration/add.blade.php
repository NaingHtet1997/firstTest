@extends('admin.layouts.master')

 @section('page-title','Add New Travelinspiration')
@section('content')
@if(Session::has('success'))
<p class="alert alert-success">{{Session::get('success')}}</p>
@endif
<div class="card-body">
    
     <form  enctype="multipart/form-data" action="{{route("inspiration.store")}}"  method="POST">
                  @csrf       
         <div class="form-body">
            <div class="form-row">
              <div class="col-md-12">
              <div class="row">
            <div class="col-md-6">
                <label for="validationCustom01">Title_En:</label>
                <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Enter  Title" name="title_en" required="">
                
            </div>
              @error("title_en")
  <small class="text-primary">{{$message}}</small>
  @enderror
             <div class="col-md-6">
                <label for="validationCustom01">Title_Sp:</label>
                <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Enter  Title" name="title_sp" required="">
                
            </div>
          </div>
        </div>
          @error("title_sp")
  <small class="text-primary">{{$message}}</small>
  @enderror
             <div class="col-md-12 mb-3">
                <label for="validationCustom01"> Description_En:</label>
               <textarea id="desc" class="form-control" rows="15" name="desc_en"></textarea>
               
              </div>
 @error("desc_en")
  <small class="text-primary">{{$message}}</small>
  @enderror
              <div class="col-md-12 mb-3">
                <label for="validationCustom01"> Description_Sp:</label>
               <textarea id="desc1" class="form-control" rows="15" name="desc_sp"></textarea>
               
              </div>
               @error("desc_sp")
  <small class="text-primary">{{$message}}</small>
  @enderror
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Image:</label>
             

            @include('admin.inspiration.image_upload')
           
             
            
              </div>
               @error("image")
  <small class="text-primary">{{$message}}</small>
  @enderror

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



