@extends('admin.layouts.master') 
@section('page-title','TravelInspiration')

@section('content')
@if(Session::has('success'))
<p class="alert alert-success">{{Session::get('success')}}</p>
@endif
	<div class="card-body">
    <div id="bs4-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
        <form action="{{route('inspiration.create')}}"  method="get">
             <button class="btn btn-primary float-left" type="submit">Add New</button>
           
        <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
		<thead>
	                <tr>
                        <td>Title</td>
                       
                        <td>Image</td>
                        <td>Action</td>
                        <td>Status</td>
                    </tr>
                    </thead>
                <tbody>
                    @foreach($travels as $key=>$travel)
                        <tr>
                         <td>{{$travel->title_en}}</td>
                        
                         <td><img src="{{asset('template/images/inspiration/'.$travel->image)}}" width="50px" height="50x"></td>
                          <td>&nbsp<a href="{{route('inspiration.edit',['id'=>$travel->id])}}" class="btn btn-primary">Edit</a>
                           <button type="button" class="btn btn-danger  delete_btn"
                        data-toggle="modal" data-target="#deleteModel"
                        data-act="Delete"
                        data-id="{{$travel->id}}">Delete
                    </button></td>
                          <td>@if($travel->status ==1)Active @else Deactive @endif</td>
                           
                    </tr>
                    @endforeach
                  
            </table>
    </tbody>
               </form>  
    {{$travels->links()}}
</div>
</div>
@component('admin.inspiration.delete')
@endcomponent
@endsection
@push('page_scripts')
<script type="text/javascript">
     var base_url = "{{route("inspiration.destroy", ["inspiration"=>0])}}";;
      
     $(document).on("click", '.delete_btn', function (e) {  
            document.getElementById("deleteform").action = base_url+$(this).data('id');
        });
    
</script>
@endpush



  