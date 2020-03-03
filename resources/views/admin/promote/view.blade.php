@extends('admin.layouts.master')

@section('page-title','Promote Message Detail')

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
    
     <form method="POST" action="" enctype="multipart/form-data">
@method('patch')
 @csrf
           
   
                  
        <div class="form-body">
       
            <div class="form-row mt-3">
                <div class="col-md-2">
                    <label for=""><b>Title (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$promote->title_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Title (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$promote->title_sp}}
                </div>

            </div>
            
            <div class="form-row mt-2">
                <div class="col-md-2">
                    <label for=""><b>Description (Eng)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$promote->desc_en}}
                </div>

            </div>
            <div class="form-row mt-2">
                <div class="col-md-2 ">
                    <label for=""><b>Description (Spain)</b></label>
                </div>
                <div class="col-md-10">&nbsp; : &nbsp;
                {{$promote->desc_sp}}
                </div>

            </div>
            
       
        </div>
    </form>
   
</div>
@endsection




