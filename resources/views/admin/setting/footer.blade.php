@extends('admin.layouts.master') 
@section('page-title',
'Manage Footer') 
@section('setting','active')
@section('content') 
@if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif
<form  class="needs-validation" novalidate="" 
action="{{url('admin/footer')}}" method="post">
@csrf
<div class="row">

        <div class="col-md-12">


            <div class="form-group{{ $errors->has('copyright') ? ' has-error' : '' }}">

                <label class="col-md-12"><strong style="text-transform: uppercase;">Copyright Text</strong></label>

                <div class="col-md-12">

                  
                    <input type="text" name="copyright" class="form-control bold input-lg" value="{{ $basic->copyright }}" required>

                    @if ($errors->has('email'))

                        <span class="help-block">

                            <strong>{{ $errors->first('email') }}</strong>

                        </span>

                    @endif

                </div>

            </div>

            <div class="form-group{{ $errors->has('sitename_en') ? ' has-error' : '' }}">

                <label class="col-md-12"><strong style="text-transform: uppercase;">Sitename for english</strong></label>

                <div class="col-md-12">

                
                       <input type="text" name="sitename_en" class="form-control bold input-lg" value="{{ $basic->sitename_en }}" required>


                    @if ($errors->has('email'))

                        <span class="help-block">

                            <strong>{{ $errors->first('email') }}</strong>

                        </span>

                    @endif

                </div>

            </div>

            <div class="form-group{{ $errors->has('sitename_sp') ? ' has-error' : '' }}">

                <label class="col-md-12"><strong style="text-transform: uppercase;">Sitename for spanish</strong></label>

                <div class="col-md-12">

                  <input type="text" name="sitename_sp" class="form-control bold input-lg" value="{{ $basic->sitename_sp }}" required>

                    @if ($errors->has('email'))

                        <span class="help-block">

                            <strong>{{ $errors->first('email') }}</strong>

                        </span>

                    @endif

                </div>

            </div>

            <div class="form-group">

                <div class="col-md-12">

                    <button type="submit" class="btn btn-info"><i class="fa fa-send"></i> UPDATE</button>

                </div>

            </div>

        </div>

    </div><!-- row -->
    </form>



@endsection

