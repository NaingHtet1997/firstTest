@extends('admin.layouts.master') 
@section('page-title',
'Manage About') 
@section('setting','active')
@section('content') 
@if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif
<div class="card-body"> 
 <form class="form-horizontal" method="post" role="form" action="{{url('admin/about')}}">

        @csrf

        <div class="form-body">

            <div class="form-group{{ $errors->has('about_en') ? ' has-error' : '' }}">

                <label class="col-md-12"><strong style="text-transform: uppercase;">About Page For English</strong></label>

                <div class="col-md-12">

                    <textarea id="area1" class="form-control" rows="15" name="about_en">{{ $basic->about_en }}</textarea>

                    @if ($errors->has('about_en'))

                        <span class="help-block">

                            <strong>{{ $errors->first('about_en') }}</strong>

                        </span>

                    @endif

                </div>

            </div>
            <br>
            <div class="form-group{{ $errors->has('about_sp') ? ' has-error' : '' }}">

                <label class="col-md-12"><strong style="text-transform: uppercase;">About Page For Spanish</strong></label>

                <div class="col-md-12">

                    <textarea id="area6" class="form-control" rows="15" name="about_sp">{{ $basic->about_sp }}</textarea>

                    @if ($errors->has('about_sp'))

                        <span class="help-block">

                            <strong>{{ $errors->first('about_sp') }}</strong>

                        </span>

                    @endif

                </div>
            </div>
            <br>
            <div class="form-group{{ $errors->has('vission_en') ? ' has-error' : '' }}">

                <label class="col-md-12"><strong style="text-transform: uppercase;">Vission English</strong></label>

                <div class="col-md-12">

                    <textarea id="area2" class="form-control" rows="15" name="vission_en">{{ $basic->vission_en }}</textarea>

                    @if ($errors->has('vission_en'))

                        <span class="help-block">

                            <strong>{{ $errors->first('vission_en') }}</strong>

                        </span>

                    @endif

                </div>

            </div><br>

            <div class="form-group{{ $errors->has('vission') ? ' has-error' : '' }}">

                <label class="col-md-12"><strong style="text-transform: uppercase;">Vission Spanish</strong></label>

                <div class="col-md-12">

                    <textarea id="area4" class="form-control" rows="15" name="vission_sp">{{ $basic->vission_sp }}</textarea>

                    @if ($errors->has('vission_sp'))

                        <span class="help-block">

                            <strong>{{ $errors->first('vissions_sp') }}</strong>

                        </span>

                    @endif

                </div>

            </div><br>

            <div class="form-group{{ $errors->has('mission_en') ? ' has-error' : '' }}">

                <label class="col-md-12"><strong style="text-transform: uppercase;">Mission English</strong></label>

                <div class="col-md-12">

                    <textarea id="area3" class="form-control" rows="15" name="mission_en">{{ $basic->mission_en}}</textarea>

                    @if ($errors->has('mission_en'))

                        <span class="help-block">

                            <strong>{{ $errors->first('mission_en') }}</strong>

                        </span>

                    @endif

                </div>

            </div><br>

            <div class="form-group{{ $errors->has('mission_sp') ? ' has-error' : '' }}">

                <label class="col-md-12"><strong style="text-transform: uppercase;">Mission Spanish</strong></label>

                <div class="col-md-12">

                    <textarea id="area5" class="form-control" rows="15" name="mission_sp">{{ $basic->mission_sp }}</textarea>

                    @if ($errors->has('mission_sp'))

                        <span class="help-block">

                            <strong>{{ $errors->first('mission_sp') }}</strong>

                        </span>

                    @endif

                </div>

            </div><br>

            <div class="row">

                <div class="col-md-12">

                    <button type="submit" class="btn btn-info "><i class="fa fa-send"></i> Update About</button>

                </div>

            </div>



        </div>

    </form>
 </div>

    @endsection

@push('page_scripts')

<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>



<script type="text/javascript">

    bkLib.onDomLoaded(function() { new nicEditor({fullPanel : true}).panelInstance('area1'); });

     bkLib.onDomLoaded(function() { new nicEditor({fullPanel : true}).panelInstance('area2'); });

      bkLib.onDomLoaded(function() { new nicEditor({fullPanel : true}).panelInstance('area3'); });

      bkLib.onDomLoaded(function() { new nicEditor({fullPanel : true}).panelInstance('area4'); });

      bkLib.onDomLoaded(function() { new nicEditor({fullPanel : true}).panelInstance('area5'); });

       bkLib.onDomLoaded(function() { new nicEditor({fullPanel : true}).panelInstance('area6'); });
</script>

@endpush