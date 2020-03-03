@extends('maintemplate')
@section('content')
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><h3>Tour Program</h3></div>
      </div>
      @foreach($tourprograms as $data)
      <div class="row">
        <div class="col-md-12">
          <div class="card card-program mb-3" >
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="{{asset('template/images/tourprogram/'.$data->thumbnail)}}" width="200" height="200" class="card-img" alt="...">
              </div>
              <div class="col-md-9">
                <div class="card-body card-tour">
                  <h5 class="card-title">{{$data->title_en}}</h5>
                  <div class="row cardrow">
                    <div class="col-md-8 cardtext">{{$data->subtitle_en}}</div>
                    <div class="col-md-4">Start Date:<span>{{$data->created_at}}</span></div>
                  </div>
                  <p class="card-text pt-2">  {!! Str::limit($data->desc_en, 200) !!}</p>

                  <a href="{{url('tourprogram',$data->id)}}" class="btn-program">Read More</a>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

   

    <div class="container">
        {{$tourprograms->links()}}
    </div>
  </section>
@endsection





  

  
 

         
  