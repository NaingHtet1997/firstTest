@extends('maintemplate')
@section('content')
	 <section class="page-section" id="services">
    <div class="container">
      <div class="row about-us">
        <div class="col-md-6 text-center">
          <div class="about-border">
            <img src="img/7.jpg" class="img-fluid" >
          </div>
        </div>
        <div class="col-md-6">
          <h2>About Us</h2>
          <p>{{$basic->desc_en}}</p>
        </div>
      </div>
    </div>
  </section>


   



  

  <section class="page-section" id="services">
    <div class="container">
      <div class="row about-us">    
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-right">Vision</h2>
                <p class="text-right"></p>
              <h2 class="text-right" >Mission</h2>
                <p class="text-right"></p>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </section>
@endsection