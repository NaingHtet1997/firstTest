@extends('maintemplate')
@section('content')
<section class="page-section" id="services">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-8">
          <div class="card card-detail" >
            <img src="{{asset('template/images/7.jpg')}}" class="card-img-top" alt="...">
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
              <div class="card-body new-btn" style="float: right;Name">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Enquiry</button>
              </div>
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

  <div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form  enctype="multipart/form-data" action="{{url('admin/blog')}}"  method="POST">
                    @method('post')
                    @csrf
                    
            <h3 class="text-center">Enquiry </h3>
            <div class="modal-body">
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="col-md-12 mb-3">
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="col-md-12 mb-3">
                   <input type="text" class="form-control" name="phone" id="" placeholder="Phone">
                </div>
                <div class="col-md-12 mb-3">
                 <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div class="col-md-12 mb-3">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Messages">
                  </textarea>
                </div>

             
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary text-right" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

    