@extends('admin.layouts.master') 
@section('page-title','Profile')

@section('content')
<div class="card-body content-text">
<div class="col">
  
   	@foreach ($errors->all() as $error)
        <p class="text-danger">{{ $error }}</p>
    @endforeach
    <ul class="list-reset p-t-10">
       	<li class="p-b-10"><span class="labeltext w-150 d-inline-block">Name</span><span>{{$profile->name}}</span></li>
        <li class="p-b-10"><span class="labeltext w-150 d-inline-block">Email</span><span>{{$profile->email}}</span></li>
        <li class="p-b-10"><span class="labeltext w-150 d-inline-block"></span><span> <a class="btn btn-info delete_button" data-toggle="modal" data-target="#changePass" data-act="changePass" data-id="">Change Password</a></span>
        </li>
    </ul>

</div>
   
  
</div>
@endsection
<div class="modal fade" id="changePass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ url('change-pass') }}">
                @csrf
                <h3 class="text-center">Change Password</h3>
                  	<div class="modal-body">
                      	<div class="form-row">
                           	<div class="col-md-12 mb-3">
                                <label for="validationCustom01">Current Password:</label>
                             	<input id="password" type="password" class="form-control" name="password" autocomplete="current-password" placeholder="Enter Current Password">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">New Password:</label>
                               	<input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password" placeholder="Enter New Password">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">New Confirm Password:</label>
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password" placeholder="Enter New Confirmation Password">
                            </div>
                        </div>
                  	</div>
                  	<div class="modal-footer">
                     	<button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                     	<input type="submit" class="btn btn-success " value="Change">
                 	</div>
              </div>
            </form>
         </div>
      </div>
   </div>
</div>
