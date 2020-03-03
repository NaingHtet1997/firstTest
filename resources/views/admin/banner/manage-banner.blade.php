@extends('admin.layouts.master') 
@section('page-title','Manage Banner') 
@section('setting','active')
@section('content') 
@if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif
<form class="needs-validation" enctype="multipart/form-data" 
action="{{url('admin/banner')}}" method="post"> 
    @csrf 
        <div class="card-body"> 
            <div class="form-row">                    
                <div class="col-md-6 mb-3"> 
                    <div class="panel-heading">Banner images</div>
                        <div class="panel-body">
                            <img class="abir_image" src="{{asset('template/images/banner/favicon.png')}}" width="200px;" alt="logo" />

                        </div>
                <div class="form-group{{ $errors->has('favicon') ? ' has-error' : '' }}">
                    <span class="btn green fileinput-button">
                        <i class="fa fa-plus"></i>
                        <span> Upload New Icon </span>
                        <input type="file" name="favicon" class="form-control input-lg" >
                    </span>
                    @if ($errors->has('favicon'))
                        <span class="help-block">
                            <strong>{{ $errors->first('favicon') }}</strong>
                        </span>
                    @endif

                </div>
            </div> 
            </div> <br>

        <div class="card-footer bg-light text-right"> 
            <button class="btn btn-info" type="submit">Update</button> 
            

        </div> 
    </form> 

    @endsection