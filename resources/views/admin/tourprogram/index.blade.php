@extends('admin.layouts.master')
@section('page-title','Manage Tour Program')
@section('tourprogram','active')
@section('content')

@if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
<div class="card-body new-btn">
   <a href="{{url('admin/tourprogram/create')}}"  class="btn btn-info">Add New</a>
</div>
<div class="card-body">
    <div id="bs4-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
        <table id="document_type_table" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="bs4-table_info">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tourprograms as $data)
                <tr role="row">
                    <td>{{$data->title_en}}</td>
                    <td>{{$data->subtitle_en}}</td>
                    <td><img src="{{asset('template/images/tourprogram/'.$data->thumbnail)}}" width="100px"></td>
                    <td>@if($data->status ==1)Active @else Deactive @endif</td>
                    <td class="sorting">
                          
                        <a href="{{url('admin/tourprogram/'.$data->id.'/'.'edit')}}" class="btn btn-info">Edit</a>
                        <button type="button" class="btn btn-danger  delete_btn"
                        data-toggle="modal" data-target="#deleteModel"
                        data-act="Delete"
                        data-id="{{$data->id}}">Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$tourprograms->links()}}
    </div>
   
</div>
@component('component.admin.tourprogram')

    @endcomponent
@endsection
@push('page_scripts')
<script type="text/javascript">
     var base_url = "{{url('admin/tourprogram')}}";
      
     $(document).on("click", '.delete_btn', function (e) {  
            
            document.getElementById("deleteform").action = base_url+"/"+$(this).data('id');
        });
     $(document).on("click", '.edit_btn', function (e) {
           
           
            $('[name="title"]').val($(this).data('title'));
             $('[name="desc"]').val($(this).data('desc'));
            $('[name="status"]').prop('checked', $(this).data('status')>0);

            document.getElementById("editform").action = base_url+"/"+$(this).data('id');
        });
</script>
@endpush


