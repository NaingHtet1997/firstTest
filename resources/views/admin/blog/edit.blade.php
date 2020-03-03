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
     <form method="POST" action="{{ url('admin/blog/'.$blog->id) }}" enctype="multipart/form-data">
      @method('patch')
      @csrf
         
         <div class="form-body">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Blog Title(EN):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$blog->title_en}}" placeholder="Enter Blog Title(EN)" name="title_en" required="">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Blog Title(SP):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$blog->title_sp}}" placeholder="Enter Blog Title(SP)" name="title_sp" required="">
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Blog Subtitle(EN):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$blog->subtitle_en}}" placeholder="Enter Blog Subtitle(EN)" name="subtitle_en" required="">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Blog  Subtitle(SP):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$blog->subtitle_sp}}" placeholder="Enter Blog Subtitle(SP)" name="subtitle_sp" required="">
                  </div>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Author(EN):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$blog->author_en}}" placeholder="Enter Author(EN)" name="author_en" required="">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Author(SP):</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$blog->author_sp}}" placeholder="Enter Author(SP)" name="author_sp" required="">
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Blog Description(EN):</label>
                    <textarea id="desc" class="form-control" rows="15" name="desc_en">{{$blog->desc_en}}</textarea>
                  </div> 
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Blog Description(SP):</label>
                    <textarea id="descsp" class="form-control" rows="15" name="desc_sp">{{$blog->desc_sp}}</textarea>
                  </div> 
                </div>
              </div>
             

               <div class="col-md-12 mb-3">
                <label for="validationCustom01">Blog Image:</label>
                @if(isset($blog))
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="height: 150px;">
                        <img class="abir_image" src="{{asset('template/images/blog/'.$blog->image)}}" alt="logo" />
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
                        <input  type="checkbox" class="cr-styled" name="status" value="1" @if($blog->status == 1) checked @else @endif>
                      
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
@component('component.admin.blog')

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

</script>

@endpush



