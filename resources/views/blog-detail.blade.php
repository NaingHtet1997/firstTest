@extends('maintemplate')
@section('content')


  <section class="page-section" id="services">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-8">
          <div class="card card-detail" >
            <img src="img/7.jpg" class="card-img-top" alt="...">
            <div class="card-body card-blog">
              <div class="row">
                <div class="col-md-8 text-left blog-title">
                  <h3 class="card-title">Blog Post title</h3>
                </div>
                <div class="col-md-4">
                  <p>Post Date:<span>2020-2-1</span></p>
                  <p>Author:<span>John</span></p>
                </div>
              </div>
              <div class="row"><div class="col-md-12">
              <p class="card-text text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
             </div></div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-12 text-right">
              <h3>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-google-plus-square"></i>
              </h3>

            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="latestnews text-left">
            <h3>Recent Post</h3>
                <div class="sidebar-sp">
                  <div class="row">
                    <div class="col-sm-3 post-sidebar-f">
                      <img src="{{asset('template/images/7.jpg')}}">
                    </div>
                    <div class="col-sm-9">
                      <div class="card-title size ">Lorem ipsum dolor sit amet</div>
                      <div class="card-text sizeone">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                      </div>
                        
                    </div>
                  </div>   
                </div>
                <div class="sidebar-sp">
                  <div class="row">
                    <div class="col-sm-3 post-sidebar-f">
                      <img src="{{asset('template/images/7.jpg')}}">
                    </div>
                    <div class="col-sm-9">
                      <div class="card-title size ">Lorem ipsum dolor sit amet</div>
                      <div class="card-text sizeone">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                      </div>
                        
                    </div>
                  </div>   
                </div>
                <div class="sidebar-sp">
                  <div class="row">
                    <div class="col-sm-3 post-sidebar-f">
                      <img src="{{asset('template/images/7.jpg')}}">
                    </div>
                    <div class="col-sm-9">
                      <div class="card-title size ">Lorem ipsum dolor sit amet</div>
                      <div class="card-text sizeone">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                      </div>
                        
                    </div>
                  </div>   
                </div>
                <div class="sidebar-sp">
                  <div class="row">
                    <div class="col-sm-3 post-sidebar-f">
                      <img src="{{asset('template/images/7.jpg')}}">
                    </div>
                    <div class="col-sm-9">
                      <div class="card-title size ">Lorem ipsum dolor sit amet</div>
                      <div class="card-text sizeone">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                      </div>
                        
                    </div>
                  </div>   
                </div>
          </div>
          <div class="updatenews text-left">
            <h3>Update post</h3>
            <div class="row">
              <div class="col-md-12">
                <div class="card cardupdate" >
                  <img src="{{asset('template/images/7.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body card-updatebody">
                    <h5 class="card-title">Blog Post title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card cardupdate" >
                  <img src="{{asset('template/images/7.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body card-updatebody">
                    <h5 class="card-title">Blog Post title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       
        
      </div>


    </div>
  </section>

@endsection