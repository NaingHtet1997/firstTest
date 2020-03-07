@extends('admin.layouts.master')

@section('page-title','Update Tour Program')

@section('tourprogram','active')
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
     <form method="POST" action="{{ url('admin/tourprogram/'.$tourprogram->id) }}" enctype="multipart/form-data">
      @method('patch')
      @csrf
         
         <div class="form-body">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Tour Program Title(EN):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$tourprogram->title_en}}" placeholder="Enter Tour Title(EN)" name="title_en" required="">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Tour Program Title(SP):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$tourprogram->title_sp}}" placeholder="Enter Tour Title(SP)" name="title_sp" required="">
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Author(EN):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$tourprogram->author_en}}" placeholder="Enter Author(EN)" name="author_en" required="">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Author(SP):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$tourprogram->author_sp}}" placeholder="Enter Author(SP)" name="author_sp" required="">
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Tour Parogram Description(EN):</label>
                    <textarea id="desc" class="form-control" rows="15" name="desc_en">{{$tourprogram->desc_en}}</textarea>
                  </div> 
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Tour Parogram Description(SP):</label>
                    <textarea id="descsp" class="form-control" rows="15" name="desc_sp">{{$tourprogram->desc_sp}}</textarea>
                  </div> 
                </div>
              </div>
             

               <div class="col-md-12 mb-3">
                <label for="validationCustom01">Tour  Image:</label>
                @if(isset($tourprogram))
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="height: 150px;">
                        <img class="abir_image" src="{{asset('template/images/tourprogram/'.$tourprogram->thumbnail)}}" alt="logo" />
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
                      
                  <input type="hidden" value="{{auth()->user()->id}}" name="created_by"> 
                         <input  type="hidden" name="status" value="0">
                        <input  type="checkbox" class="cr-styled" name="status" value="1" @if($tourprogram->status == 1) checked @else @endif>
                      
                      <label class="form-check-label" name="status" for="defaultCheck1">
                        Status
                      </label>
                    </div>  
                   
                </div>

                <div class="col-md-12 mb-3">
                  <label>Related Images :</label>
                  <button type="button" class="btn btn-success" id="fileopen" onclick="openfileDialog();">Change Images</button>
                  <input type="file" name="files[]" id="fileinput" style="display: none;" multiple>
                  <div class="row mt-1" id="origin_img">
                    @foreach($tourprogram->photos as $photo)
                    <div class="col-md-3">
                      <img src="{{asset('template/images/relatedTour/'.$photo->image)}}" class="abir_image">
                    </div>
                    @endforeach
                  </div>
                <div id="image_preview" class="row"></div>
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
@component('component.admin.tourprogram')

 @endcomponent
@endsection
@push('page_scripts')

 <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<script type="text/javascript">

      CKEDITOR.replace( 'desc', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
       CKEDITOR.replace( 'descsp', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

       function openfileDialog() {
            $("#fileinput").click();
        }

        $("#fileinput").change(function(){
           $('#image_preview').html("");
           var total_file=document.getElementById("fileinput").files.length;
           if(total_file>0)
           {
            $('#origin_img').html("");
           }
           for(var i=0;i<total_file;i++)
           {
            $('#image_preview').append("<div class='col-md-3'><img src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
           }
        });

</script>

@endpush



