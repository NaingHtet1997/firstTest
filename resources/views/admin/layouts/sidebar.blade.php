
 <nav class="main-menu">
          <ul class="nav metismenu">

           <li class="nav-dropdown">
              <a class="has-arrow" href="" aria-expanded="false"><i class="fa fa-laptop" aria-hidden="true"></i><span>Dashboard</span></a>
            </li>
           <li class="nav-dropdown">
              <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span>Manage Tour Program</span></a>
                <ul class="collapse nav-sub first" aria-expanded="false">
                 <li><a href="{{url('admin/tourprogram')}}"><span>Tour Program Lists</span></a></li>
               
              
               
              </ul>
            </li>
            <li class="nav-dropdown">
              <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span>Manage Sevices</span></a>
                <ul class="collapse nav-sub first" aria-expanded="false">
                 <li><a href="{{url('admin/car')}}"><span>Car Tickets Lists</span></a></li>
                 <li><a href="{{url('admin/bus')}}"><span>Bus Tickets Lists</span></a></li>
                 <li><a href="{{url('admin/air')}}"><span>Air  Lists</span></a></li>
                 <li><a href="{{url('admin/hotel')}}"><span>Hotel Booking Lists</span></a></li>
               
              
               
              </ul>
            </li>
            <li class=" nav-dropdown">
              <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-car"></i><span>Travel Inspirations</span></a>
                <ul class="collapse nav-sub first" aria-expanded="false">
                <li><a href="{{url('admin/inspiration')}}"><span>Inspiration Lists</span></a></li>
              </ul>
            </li>
            
            <li class="@yield('blog') nav-dropdown">
              <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span>Manage Blog</span></a>
                <ul class="collapse nav-sub first" aria-expanded="false">

                <li><a href="{{url('admin/blog')}}"><span>Blog Lists</span></a></li>               
              </ul>
            </li>
            <li class=" nav-dropdown">
              <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span>Manage Partner</span></a>
                <ul class="collapse nav-sub first" aria-expanded="false">
                <li><a href="{{url('admin/partner')}}"><span>Our Client</span></a></li>
              </ul>
            </li>
            <li class="nav-dropdown">
              <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-table"></i><span>Setting</span></a>
                <ul class="collapse nav-sub first" aria-expanded="false">
                   <li><a href="{{url('admin/banner')}}"><span>Banner</span></a></li>
                  <li><a href="{{url('admin/logo')}}"><span>Logo & favicon</span></a></li>
                  <li><a href="{{url('admin/footer')}}"><span>Manage Footer</span></a></li>
                  <li><a href="{{url('admin/about')}}"><span>Manage About</span></a></li>
                  <li><a href="{{url('admin/contact')}}"><span>Manage Contact</span></a></li>
                </ul>
            </li>
          </ul>
        </nav>
        
        