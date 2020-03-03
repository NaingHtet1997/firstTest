<!-- Navigation -->
@php 
$basic =\App\BasicSetting::first();
@endphp
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <div id="mySidenav" class="sidenav">
        <div class="sidenav-nav"> 
          <img src="{{asset('template/images/logo/favicon.png')}}"  class=" text-center">
          <h3 class="text-center text-uppercase">Myan Mahar</h3>
          <p class="text-muted text-center">Travel and Tour</p>
        </div>
        <a href="javascript:void(0)" class="closebtn" id="navmenu1" >&times;</a>
       
        <a href="/" class="nav-link {{request()->is('/')?'active':''}}">{{trans("cdg.home")}}</a>
        <a href="{{url('tourprogram')}}">@lang("travel.tourprogram")</a>
        <a href="{{url('service')}}">@lang("travel.service")</a>
        <a href="{{url('blog')}}">@lang("travel.blog")</a>
        <a href="{{url('inspiration')}}">@lang("travel.travelinspiration")</a>
        <a href="{{url('about')}}">@lang("travel.aboutus")</a>
        <a href="{{url('contact')}}" class="contactnav ">@lang("travel.contactus")</a>
      </div>
      <span style="cursor:pointer;color: #fff;" id="navmenu" class="text-left" >&#9776; </span>
     <!--  <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="sideimg">
        <img src="img/logo.png" > 
      </span> -->

        <div class=" js-scroll-trigger" style="color: #fff;">Language-
          <select class="selectpicker" data-width="fit">
            <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
            <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
              <!-- <option><a href="link . com">Test 1</a></option> -->
          </select>
        </div>
        
      
      </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <h2 class="">Plan Your Travel Now!</h2>
        <p class="text-muted">You don't need magic to disappear.All need is a distination.</p>
        <!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> -->
        <div class="header-search">
          <form class="">
            <div class="input-group mb-3 myform text-center" width="200px">
              <input type="text" class="form-control " placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btnsearch" type="button ">
                    <h4><i class="fas fa-search"></i></h4>
                  </button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  