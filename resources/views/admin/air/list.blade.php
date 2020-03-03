@extends('admin.layouts.master')
@section('page-title','Manage Air Ticket')
@section('air','active')
@section('content')
@if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success')}}</p>
@endif
<div class="card-body new-btn mt-2">
   <a href="{{route('air.create')}}"   class="btn btn-info">Add New</a>
</div>
<div class="card-body">
    <div id="bs4-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
       <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name(Eng)</th>                  
                    <th>Journey(Eng)</th>                    
                    <th>Price</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($airtickets as $data)
                <tr role="row">
                    <td><img src="{{asset('template/images/air/'.$data->image)}}" width="70px" height="50px"></td>
                    <td>{{$data->name_en}}</td>                
                    <td>{{$data->journey_type_en}}</td>                    
                    <td>{{$data->price}}</td>
                    <td>{{$data->time}}</td>
                    <td class="sorting">
                    <a href="{{route('air.show',['id'=>$data->id])}}" class="btn btn-success text-white">View</a>
                    <a href="{{route('air.edit',['id'=>$data->id])}}" class="btn btn-info">Edit</a>
                         
                    <button type="button" class="btn btn-danger  delete_btn"
                        data-toggle="modal" data-target="#deleteModel"
                        data-act="Delete"
                        data-id="{{$data->id}}">Delete
                    </button></td>
                    
                </tr>
                @endforeach
               
            </tbody> 
           
                   
        </table>
        {{$airtickets->links()}}  
    </div>
   
</div>
@component('component.delete')

 @endcomponent
@endsection

@push('page_scripts')
<script type="text/javascript">
     var base_url = "{{url('admin/air')}}";
      
     $(document).on("click", '.delete_btn', function (e) {  
            
            document.getElementById("deleteform").action = base_url+"/"+$(this).data('id');
        });
   
</script>


<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>



<script type="text/javascript">

    bkLib.onDomLoaded(function() { new nicEditor({fullPanel : true}).panelInstance('area1'); });

</script>

@endpush




