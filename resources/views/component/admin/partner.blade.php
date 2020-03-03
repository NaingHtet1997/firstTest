
<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" action="{{route('partner.store')}}"  method="POST">
                  @method('post')
                  @csrf
                  
          <h3 class="text-center">Create New Client</h3>
          <div class="modal-body">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Company Name:</label>
                <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Enter Company Name" name="name" required="">
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Companay Website:</label>
                <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Enter Link" name="link" >
              </div>
               <div class="col-md-12 mb-3">
                <label for="validationCustom01"> Image:</label>
              @include('admin.img_upload')
              </div>
             <!--  <div class="col-md-12 mb-3">
                <label for="validationCustom01">Order:</label>
                <input type="text" class="form-control" id="validationCustom01" value="" placeholder="EnterOrder" name="order" >
              </div> -->
            <div class="col-md-12 mb-3"> <div class="form-check">
              <input  type="checkbox" class="form-check-input" name="status" value="1">
                      
            <label class="form-check-label" name="status" for="defaultCheck1">
                        Status
            </label>
          </div>  
                   
                </div>
              
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <input type="submit" class="btn btn-success " value="Save">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="editModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
              <form enctype="multipart/form-data" action="" method="POST"  id="editform" name="editform">
                @method('PATCH')
               @csrf
                  
          <h3 class="text-center">Edit Client</h3>
          <div class="modal-body">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Company Name:</label>
                <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Enter Company Name" name="name" required="">
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Company Websiter:</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Enter Website Link" name="link" >
              </div>
               <div class="col-md-12 mb-3">
                <label for="validationCustom01">Company Image:</label>
               @include('admin.img_upload')
              </div>
               <div class="col-md-12 mb-3">
                <label for="validationCustom01">Order:</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Enter order" name="order" >
              </div>
            <div class="col-md-12 mb-3"> <div class="form-check">
                                         
                        <input  type="checkbox" class="form-check-input" name="status" value="1">
                      
                      <label class="form-check-label" name="status" for="defaultCheck1">
                        Status
                      </label>
                    </div>  
                   
                </div>
              
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <input type="submit" class="btn btn-success " value="Save">
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
          <form action="" id="deleteform"  method="post">
            @method('Delete')
            {{ csrf_field() }}
            <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
               <h1 class="text-center">
                  <i class="zmdi zmdi-alert-circle-o zmdi-hc-fw"></i>
               </h1>
               <div class="modal-body text-center">
                  <h4>Are you sure?</h4>
                  <p>Do you really want to delete this record?</p>
               </div>
               <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary btn-rounded">Cancel</button>
                  <input type="submit" class="btn btn-danger btn-rounded" value="Delete">
               </div>
            </div>
         </form>
      </div>
   </div>
</div>