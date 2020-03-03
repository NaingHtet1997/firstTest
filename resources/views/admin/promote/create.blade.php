@extends('admin.layouts.master')
@if(isset($blog))
@section('page-title','Update Promote Message')
@else
@section('page-title','Create Promote Message')
@endif
@section('promote','active')
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
    
  <form  enctype="multipart/form-data" action="{{route('promote.store')}}"  method="POST">
                  @method('post')
                  @csrf
    <div class="form-body">
      <div class="form-row">
      <!-- Left Column -->
      <div class="col-md-6">
        <div class="col-md-12 mb-3">
          <label for="validationCustom01"> Title(Eng):</label>
          <input type="text" class="form-control" value="" placeholder="" name="title_en" required="">
               
        </div>
        
        
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Description(Eng):</label>
          <textarea id="desc_en" class="form-control" rows="15" name="desc_en"></textarea>
                
        </div>

        
        
      
      </div>
      <!-- Right Column -->
      <div class="col-md-6">
        <div class="col-md-12 mb-3">
          <label for="validationCustom01"> Title(Spain):</label>
          <input type="text" class="form-control" value="" placeholder="" name="title_sp" required="">
               
        </div>
        
        
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Description(Spain):</label>
          <textarea id="desc_en" class="form-control" rows="15" name="desc_sp"></textarea>
                
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
@push('page_scripts')

 <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<script type="text/javascript">

      CKEDITOR.replace( 'desc_en', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

</script>

<script type="text/javascript">

      CKEDITOR.replace( 'desc_sp', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

</script>

@endpush




