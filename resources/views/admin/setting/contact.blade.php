@extends('admin.layouts.master') 
@section('page-title',
'Contact Settings') 
@section('setting','active')
@section('content') 
@if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif
<div class="card-body"> 
<form  class="needs-validation" novalidate="" 
action="{{url('admin/contact')}}" method="post">
@csrf

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationCustom02">Contact Phone:</label>
            <input type="text" name="phone" class="form-control bold input-lg" value="{{ $basic->phone }}" required>

     

        </div>
        <div class="col-md-6 mb-3">
            <label for="validationCustom02">Contact Email:</label>
            <input type="text" name="email" class="form-control bold input-lg" value="{{ $basic->email }}" required>

        </div>

        <div class="col-md-12 mb-3">
            <label for="validationCustom02">Contact Address For English:</label>
            <div class="col-md-12">
                 <input type="text" name="address_en" class="form-control bold input-lg" value="{{ $basic->address_en }}" required>



                @if ($errors->has('address_en'))

                    <span class="help-block">

                        <strong>{{ $errors->first('address_r
                        en') }}</strong>

                    </span>

                @endif

            </div>
        </div>

        <div class="col-md-12 mb-3">
            <label for="validationCustom02">Contact Address For Spanish:</label>
            <div class="col-md-12">

                  <input type="text" name="address_en" class="form-control bold input-lg" value="{{ $basic->address_en }}" required>

                @if ($errors->has('address_sp'))

                    <span class="help-block">

                    <strong>{{ $errors->first('address_r
                    sp') }}</strong>

                    </span>

                @endif

            </div>
        </div>

         <div class="col-md-12 mb-3">
            <label for="validationCustom02">Google Map:</label>
           <input type="text" name="google_map" class="form-control" value="{{$basic->google_map}}">
           


        </div>
        <div class="form-group">

        <div class="col-md-12">

            <button type="submit" class="btn btn-info"><i class="fa fa-send"></i> UPDATE</button>

        </div>

    </div>
                
    </div><!-- row -->
           
</form>
 </div>

    @endsection