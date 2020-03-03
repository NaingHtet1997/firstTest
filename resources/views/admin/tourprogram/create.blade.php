@extends('admin.layouts.master')
@if(isset($tourprogram))
@section('page-title','Update Tour Program')
@else
@section('page-title','Create Tour Program')
@endif
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
    
     <form  enctype="multipart/form-data" action="{{url('admin/tourprogram')}}"  method="POST">
        @method('POST')
        @csrf
        <div class="form-body">
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01"> Title(EN):</label>
                  <input type="text" class="form-control  {{ $errors->has('title_en') ? 'has-error' : '' }}" id="validationCustom01" value="" placeholder="Enter Title(EN)" name="title_en" required="">
                  <span class="text-danger">{{ $errors->first('title_en') }}</span>
                    
                </div>
                  <div class="col-md-6 mb-3">
                      <label for="validationCustom01"> Title(SP):</label>
                      <input type="text" class="form-control  {{ $errors->has('title_sp') ? 'has-error' : '' }}" id="validationCustom01" value="" placeholder="Enter Title(SP)" name="title_sp" required="">
                      <span class="text-danger">{{ $errors->first('title_sp') }}</span>
                    
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01"> Subtitle(EN):</label>
                  <input type="text" class="form-control  {{ $errors->has('subtitle_en') ? 'has-error' : '' }}" id="validationCustom01" value="" placeholder="Enter Subtitle(EN)" name="subtitle_en" required="">
                  <span class="text-danger">{{ $errors->first('subtitle_en') }}</span>
                    
                </div>
                  <div class="col-md-6 mb-3">
                      <label for="validationCustom01"> Subtitle(SP):</label>
                      <input type="text" class="form-control  {{ $errors->has('subtitle_sp') ? 'has-error' : '' }}" id="validationCustom01" value="" placeholder="Enter Subtitle(SP)" name="subtitle_sp" required="">
                      <span class="text-danger">{{ $errors->first('subtitle_sp') }}</span>
                    
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01"> Author(EN):</label>
                  <input type="text" class="form-control  {{ $errors->has('author_en') ? 'has-error' : '' }}" id="validationCustom01" value="" placeholder="Enter Author(EN)" name="author_en" required="">
                  <span class="text-danger">{{ $errors->first('author_en') }}</span>
                    
                </div>
                  <div class="col-md-6 mb-3">
                      <label for="validationCustom01"> Author(SP):</label>
                      <input type="text" class="form-control  {{ $errors->has('author_sp') ? 'has-error' : '' }}" id="validationCustom01" value="" placeholder="Enter Author(SP)" name="author_sp" required="">
                      <span class="text-danger">{{ $errors->first('author_sp') }}</span>
                    
                  </div>
              </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Tour Description(En):</label>
                <textarea id="desc" class="form-control {{ $errors->has('desc_en') ? 'has-error' : '' }}" rows="15" name="desc_en"></textarea>
                <span class="text-danger">{{ $errors->first('desc') }}</span>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Tour Description(Sp):</label>
                <textarea id="descsp" class="form-control {{ $errors->has('desc_sp') ? 'has-error' : '' }}" rows="15" name="desc_sp"></textarea>
                <span class="text-danger">{{ $errors->first('desc_sp') }}</span>
              </div>
            
             
              

              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Tour Image:</label>
                  @include('admin.img_upload')
              </div>

              <div class="col-md-12 mb-3"> 
                <div class="form-check">
                  <input type="hidden" value="{{auth()->user()->id}}" name="created_by"> 
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
      
     

</script>

@endpush



