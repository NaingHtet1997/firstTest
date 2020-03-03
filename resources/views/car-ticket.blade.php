@extends('maintemplate')
@section('content')

 <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center">Car Tickets</h2>
      <div class="row about-us">    
        <table class="table" style="border: 1px solid;">
          <thead class="bg-primary">
            <tr>
              <th scope="col">Logo</th>
              <th scope="col">Way</th>
              <th scope="col">Name</th>
              <th scope="col">Time</th>
              <th scope="col">Price</th>
              <th scope="col">Apply</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><img src="img/favicon.png" width="100px"></th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Otto</td>
              <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Enquiry</button></td>
            </tr>
            <tr>
              <th scope="row"><img src="img/favicon.png" width="100px"></th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
               <td>Thornton</td>
              <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Enquiry</button></td>
            </tr>
            <tr>
              <th scope="row"><img src="img/favicon.png" width="100px"></th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>the Bird</td>
              <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Enquiry</button></td>
            </tr>
          </tbody>
        </table>
       
      </div>
    </div>
  </section>



@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label  class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label  class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label  class="col-form-label">Phone:</label>
            <input type="text" class="form-control" id="phone">
          </div>
          <div class="form-group">
            <label  class="col-form-label">Subject:</label>
            <input type="text" class="form-control" id="subject">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>