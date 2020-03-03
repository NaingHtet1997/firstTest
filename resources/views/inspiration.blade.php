@extends('maintemplate')
@section('content')

  
  <section class="page-section" id="services">
    <div class="container">

      @foreach($inspiration as $data)

      <div class="row">
        <div class="col-md-12">
           <h2 class="text-center">{{$data->title_en}}</h2>
            <div class="row about-us">    
              <div class="col-md-6">
                <p class="text-right text-muted">{{$data->desc_en}}</p>
              </div>
              <div class="col-md-6 text-center">
             
                 
                   <img src="{{asset('template/images/inspiration/'.$data->image)}}" class="img-fluid" alt="...">
               
              </div>
            </div>
        </div>
      </div>
      @endforeach
     
    </div>
  </section>
  @endsection

  

  