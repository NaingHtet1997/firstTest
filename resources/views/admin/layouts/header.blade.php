<nav class="top-toolbar navbar navbar-mobile navbar-tablet">
      
      <ul class="navbar-nav nav-center site-logo">
        <li>
          <a href="{{url('admin/')}}">
            <div class="logo_mobile">
             <img src="{{asset('template/images/logo/favicon.png')}}" width="70px">
            </div>
            <h1 class="brand-text">Conchat</h1>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav nav-right">
        <li class="nav-item">
          <a href="javascript:void(0)" data-toggle-state="mobile-topbar-toggle">
            <i class="icon dripicons-dots-3 rotate-90"></i>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="top-toolbar navbar navbar-desktop flex-nowrap">
      
      <ul class="site-logo">
        <li>
          <!-- START LOGO -->
          <a href="index.html">
            <div class="logo">
               <img src="{{asset('template/images/logo/favicon.png')}}" width="70px">
            </div>
           
          </a>
          <!-- END LOGO -->
        </li>
      </ul>
      <ul class="navbar-nav nav-right">
         <li class="nav-item dropdown dropdown-menu-lg">
                      <a class="nav-link nav-pill user-avatar dropdown-item"  href="{{url('/')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        Home 
                      </a>
                    </li>
         <li class="nav-item dropdown dropdown-menu-lg">
                      <a class="nav-link nav-pill user-avatar dropdown-item"  href="{{url('about')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        About 
                      </a>
                    </li>
                     <li class="nav-item dropdown dropdown-menu-lg">
                      <a class="nav-link nav-pill user-avatar dropdown-item"  href="{{url('blog')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        Blog 
                      </a>
                    </li>
        <li class="nav-item dropdown">
          <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="{{asset('template/images/user.png')}}" class="w-35 rounded-circle" alt="Albert Einstein">
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
            <div class="dropdown-header pb-3">
              <div class="media d-user">
                <img class="align-self-center mr-3 w-40 rounded-circle" src="{{asset('template/images/user.png')}}" >
                <div class="media-body">
                  @if(Auth::check())
                  <h5 class="mt-0 mb-0">{{Auth::user()->name}}</h5>
                  <span>{{Auth::user()->email}}</span>
                  @else
                  <button>REGISTER</button>
                  <button>LOGIN</button>
                  @endif
                </div>
              </div>
            </div>
           
            <a class="dropdown-item" href="{{url('admin')}}"><i class="icon dripicons-gear"></i> Profile </a>
           
            <div class="dropdown-divider"></div>
           
            
             <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon dripicons-lock"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </div>
        </li>
       
      </ul>
      <form role="search" action="pages.search.html" class="navbar-form">
        <div class="form-group">
          <input type="text" placeholder="Search and press enter..." class="form-control navbar-search" autocomplete="off">
          <i data-q-action="close-site-search" class="icon dripicons-cross close-search"></i>
        </div>
        <button type="submit" class="d-none">Submit</button>
      </form>
    </nav>