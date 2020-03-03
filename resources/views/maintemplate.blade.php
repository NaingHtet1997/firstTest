@php 
$basic =\App\BasicSetting::first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{$basic->sitename_en}}</title>
  <link rel="icon" href="{{asset('template/images/logo.png')}}">


  <!-- Bootstrap core CSS -->
  <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
 
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('template/css/agency.min.css')}}" rel="stylesheet">
  
  <link href="{{asset('template/css/custom.css')}}" rel="stylesheet">
   <link href="{{asset('css/slick.css')}}" rel="stylesheet">
   <link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">
   
 <!--  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body id="page-top">

  @include('nav')

  @yield('content')
         
  @include('footer')
 

  
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
  <!-- Plugin JavaScript -->
  <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <script src="{{asset('template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  

  <!-- Contact form JavaScript -->
  <!-- <script src="{{asset('template/js/jqBootstrapValidation.js')}}"></script> -->
  <script src="{{asset('template/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('template/js/agency.min.js')}}"></script>
 
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
 -->  
 @stack('page_scripts')

  <script type="text/javascript">
    
    $(document).ready(function(){
    
    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
  </script>
 
<script type="text/javascript">
  $("#mySidenav").css("display",'none');
  $("#navmenu").click(function(){

    $("#mySidenav").show();
   
  
  });
  $('#navmenu1').click(function(){
    $("#mySidenav").hide();
  });
  $(document).ready(function() {

    $('#myCarousel').carousel({
      interval: 10000
  });
     $('#blogCarousel').carousel({
        interval: 5000
    });

     $(function(){
    $('.selectpicker').selectpicker();
});



/*$("#mySidenav").css("display",'none');
   $("#navmenu1").click(function(){
    $("#mySidenav").hide();
    $("#navmenu").show();
  });
  $("#navmenu").click(function(){
    // $("#navmenu").css("visibility",'hidden');
    // $(this).hide();
   
    $("#mySidenav").show();
   
  });*/
}); 
</script>

</body>

</html>
