@extends('maintemplate')
@section('content')
 	<section class="page-section" id="services">
    	<div class="container">
      <div class="row">
        <div class="col-md-12"><h3>All Blog Post</h3></div>
      </div>

      @foreach($blog as $data)
      <div class="row">
        <div class="col-md-12">
          <div class="card card-program mb-3" >
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="{{asset('template/images/blog/'.$data->image)}}" width="200" height="200" class="card-img" alt="...">
              </div>
              <div class="col-md-9">
                <div class="card-body card-tour">
                  <h2 class="card-title">
                    {{$data->title_en}}
                  </h2>
                  <div class="notesbottom variable">
                    <div class="price ">
                      {{$data->subtitle_en}}
                    </div>
                    <div class="cart fright">
                      <div class="purchease-btn text-muted">Start Date:<span>{{$data->created_at}}</span></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <p class="card-text">
                    {!! Str::limit($data->desc_en, 200) !!}
                  </p>
                 
                  
                    <a href="{{url('blog/'.$data->id)}}" class="btn-program">Read More</a>
                   
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
      
    	</div>
  	</section>
@endsection


