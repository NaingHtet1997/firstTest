@extends('maintemplate')
@section('content')
<section class="page-section" id="services">
  {{-- {!!dd($place)!!} --}}
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-detail" >
            <img src="{{asset('template/images/tourprogram/'.$place->thumbnail)}}" class="card-img-top" alt="...">
            <div class="card-body card-blog">
              <div class="row">
                <div class="col-md-8 text-left blog-title">
                  <h3 class="card-title">{{$place->title_en}}</h3>
                </div>
                <div class="col-md-4">
                  <p>Post Date:<span>{{$place->created_at->diffForHumans()}}</span></p>
                  <p>Author:<span>{{$place->author_en}}</span></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p class="card-text text-left">{!!$place->desc_en!!}</p>
                </div>
              </div>
              <div class="card-body new-btn" style="float: right;Name">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Enquiry</button>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach($place->photos as $photo)
            <div class="col-md-4 col-6">
              <img src="{{asset('template/images/relatedTour/'.$photo->image)}}" class="img-fluid">
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-4">
          <div class="latestnews text-left">
            <h3>Other Trip</h3>
            @foreach($data as $item)
                <div class="sidebar-sp">
                  <div class="row">
                    <div class="col-sm-3 post-sidebar-f">
                      <img src="{{asset('template/images/tourprogram/'.$item->thumbnail)}}">
                    </div>
                    <div class="col-sm-9">
                      <div class="card-title size ">{{$item->title_en}}</div>
                        <div class="card-text sizeone">{{$item->subtitle_en}}
                        </div>    
                      </div>
                    </div>   
                  </div>
               {{--  </div> --}}
                @endforeach

          </div><!-- End for latestnews........ -->
          <div class="updatenews text-left">
            <h3>Similar Trip</h3>
            <div class="row">
              <div class="col-md-12">
                <div class="card cardupdate" >
                  <img src="{{asset('template/images/tourprogram/'.$place->thumbnail)}}" class="card-img-top" alt="...">
                  <div class="card-body card-updatebody">
                    <h5 class="card-title">{{$place->title_en}}</h5>
                    <p class="card-text">{!!str_limit($place->desc_en, 50)!!}</p>
                    
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
        </div>/      
      </div>
    </div>
  </section>s
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

    