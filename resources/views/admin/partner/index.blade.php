@extends('admin.layouts.master')
@section('page-title','Manage Partner')
@section('partner','active')
@section('content')

@if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
<div class="card-body new-btn">
   <a href="{{url('admin/partner/create')}}"  class="btn btn-info">Add New</a>
</div>
<div class="card-body">
    <div id="bs4-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
        <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($partner as $data)
                <tr role="row">
                    <td>{{$data->name_en}}</td>
                    <td><img src="{{asset('template/images/partner/'.$data->logo)}}" width="100px"></td>
                    <td><a href="{{$data->link}}" target="_blank">{{$data->link}}</a></td>
                    <td class="sorting">
                         <a href="{{url('admin/partner/'.$data->id.'/'.'edit')}}" class="btn btn-info">Edit</a>
                        <button type="button" class="btn btn-danger  delete_btn"
                        data-toggle="modal" data-target="#deleteModel"
                        data-act="Delete"
                        data-id="{{$data->id}}">Delete
                    </button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
   
</div>
@component('component.admin.partner')

    @endcomponent
@endsection
@push('page_scripts')
<script type="text/javascript">
     var base_url = "{{url('admin/partner')}}";
      
     $(document).on("click", '.delete_btn', function (e) {  
            
            document.getElementById("deleteform").action = base_url+"/"+$(this).data('id');
        });
     $(document).on("click", '.edit_btn', function (e) {
           
           
            $('[name="name"]').val($(this).data('name'));
             $('[name="logo"]').val($(this).data('logo'));
              $('[name="link"]').val($(this).data('link'));
               $('[name="status"]').val($(this).data('status'));
            $('[name="status"]').prop('checked', $(this).data('status')>0);

            document.getElementById("editform").action = base_url+"/"+$(this).data('id');
        });
</script>
@endpush


