 <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
   <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
     <a class="navbar-brand brand-logo" href="/"><img src="{{ asset('rezicedlog.png') }}" alt="logo" /></a>
     <a class="navbar-brand brand-logo-mini" href="/"><img src="{{ asset('mini_logo.png') }}" alt="logo" /></a>
   </div>
   <div class="navbar-menu-wrapper d-flex align-items-stretch">
     <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
       <span class="fas fa-bars"></span>
     </button>
     <ul class="navbar-nav">
       <li class="nav-item nav-search d-none d-md-flex">
         <div class="nav-link">
           <!--div class="input-group">
             
                este es el input search
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
           </div-->
         </div>
       </li>
     </ul>
     <ul class="navbar-nav navbar-nav-right">

       @yield('nav_buttons')
       @if(Auth::user())
       <li class="nav-item nav-profile dropdown">
         <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
         <i class="fas fa-power-off text-primary"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
           <div class="dropdown-divider"></div>

           <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-power-off text-primary"></i>
             {{ __('Logout') }}
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
           </form>

         </div>
       </li>
       @endif
     </ul>
     <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
       <span class="fas fa-bars"></span>
     </button>
   </div>
 </nav>