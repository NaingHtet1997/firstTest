
@extends('maintemplate')
@section('content')



	<div class="slider-home container page"  >
      	<div class="row">
	        <div class="col-lg-12 text-center">
	          <h2 class="section-heading text-uppercase">Top Tour Packages</h2>
	          <p class="section-subheading text-muted">Explore a different way to travel</p>
	        </div>
      	</div>

      	<section class="customer-logos ">
           @foreach($tourprogram as $data)
          <div class="slide">
            <div class="card  text-white card-border">
             <img src="{{asset('template/images/tourprogram/'.$data->thumbnail)}}" class="card-img" alt="Card image">
              <div class="card-img-overlay card-bottom">
                <h2 class="card-title ">{{$data->title_en}}</h2>
                <div class="row">
                  <div class="col-md-8">
                    <p class="card-text cardpara">{{$data->subtitle_en}}</p>
                    <p class=" cardsalary">30days-<span>$50</span></p>
                  </div>
                  <div class="col-md-4 btn-top">
                    <a href="{{url('tourprogram',$data->id)}}" class="btn-readmore btn-sm btn-program">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      	</section>
       	<div class="row mt-5 mb-5 ">
	        <div class="col-md-12 text-center">
	           <button type="button" class="btn btn-view btn-sm">View All Packages</button>
	        </div>
      	</div>
  </div>
  

  
    <div class="slider container-fluid mt-5"  >
    	<h3 class="text-center text-white">Our Services</h3>
    	<p class="text-center text-white">Get Explore your dream to trip the world!</p>
 
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 text-center">
          <div class="circle-border circle-border-1"> 
              <img src="{{asset('template/images/car.png')}}" class="img-fluid">
            </div>
          <p class="text-center">Car Ticket</p>
        </div>
        <div class="col-md-2 text-center">
          <div class="circle-border circle-border-2"> 
              <img src="{{asset('template/images/bus.png')}}" class="img-fluid">
            </div>
          <p class="text-center">Bus Ticket</p>
        </div>
        <div class="col-md-2 text-center">
          <div class="circle-border circle-border-3"> 
              <img src="{{asset('template/images/plane.png')}}" class="img-fluid">
            </div>
          <p class="text-center">Air Ticket</p>
        </div>
        <div class="col-md-2 text-center">
          <div class="circle-border circle-border-4"> 
              <img src="{{asset('template/images/home.png')}}" class="img-fluid">
            </div>
          <p class="text-center"> Hotel Booking</p>
        </div>
        <div class="col-md-2 text-center">
          <div class="circle-border circle-border-4"> 
              <img src="{{asset('template/images/world.png')}}" class="img-fluid">
            </div>
          <p class="text-center">Air Ticket</p>
        </div>
        
        <div class="col-md-1"></div>
       
      </div> 
  	</div>
  	<section class="section-post " >
    	<div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Our Lastest Post</h2>
       
        </div>
      </div>
      <div class="row">
        <div class="card-deck">
          @foreach($blog as $data)
          <div class="card">
            <img src="{{asset('template/images/blog/'.$data->image)}}"  class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$data->title_en}}</h5>
              <div class="row date">
                <div class="col-md-6">
                  <p>{{$data->created_at}}</p>
                </div>
                <div class="col-md-6">
                  <p>Author:<span>{{$data->author_en}}</span></p>
                </div>
              </div>
              <p class="card-text pcard">{!! Str::limit($data->desc_en, 200) !!}</p>
            </div>
            <div class="card-footer text-center">
              <a href="{{url('blog/'.$data->id)}}" class="text-muted">Read More</a>
            </div>
          </div>
          @endforeach
         
        </div>
      </div>

      <div class="row m-5">
        <div class="col-md-12 text-center">
           <button type="button" class="btn btn-post btn-sm">View All Posts</button>
        </div>
      </div>
     
    	</div>
  	</section>

    <section class="section-post " >
      <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Travelling</h2>
       
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Trip Planner</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="#" class="btn btn-primary">View All Trip plan</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          
        </div>
      </div>

   
     
      </div>
    </section>
  	<section class="py-5 bg-light">
    	<div class="container p-3">
      <div class="row ">
        <div class="col-md-12">
          <h3 class="clienth3 text-center">Our Client</h3>
        </div>
      </div>
      <div class="row client">
        @foreach($partner as $data)
        <div class="col-md-2 col-sm-6">
          <a href="#">
            <img src="{{asset('template/images/partner/'.$data->logo)}}" width="100" height="100" class="card-img" alt="...">
          </a>
        </div>
        @endforeach
       
      </div>
   	 	</div>
  	</section>
@endsection
@push('page_scripts')
 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/slick.js')}}"></script>
<script type="text/javascript">
      $(document).on('ready', function() {
     
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      
    });
</script>

@endpush