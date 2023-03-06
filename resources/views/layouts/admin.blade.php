<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- plugins:css -->
  
  <link rel="stylesheet" href="{{ asset('/melody/vendors/iconfonts/font-awesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('melody/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('melody/vendors/css/vendor.bundle.addons.css') }}">
@yield('css')
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/melody/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
<title>
  @yield('title')
  </title>
</head>
<body class="sidebar-fixed">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts._nav')
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!--div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div-->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html  -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
      @if(Auth::user())
              <!--div class="profile-image">
                <img src="{{ asset('melody/images/faces/face5.jpg') }}" alt="image"/>
              </div-->
		  @if(Auth::user()->name)            
              <div class="profile-name">
          		<p class="name">
                      Welcome {{Auth::user()->name}}
                </p>
                <p class="designation">
		  {{Auth::user()->rol}}
              </p>
              </div>
      @endif
      @endif
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Panel principal</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fa fa-tags menu-icon"></i>
              <span class="menu-title">Categorias</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="/melody/pages/layout/boxed-layout.html">Boxed</a></li>
                <li class="nav-item"> <a class="nav-link" href="/melody/pages/layout/rtl-layout.html">RTL</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="/melody/pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
              </ul>
            </div>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="fas fa-cubes menu-icon"></i>
              <span class="menu-title">Productos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item"><a class="nav-link" href="/products"><i class="fa fa-cube menu-icon"></i>  Todos</a></li>
                <li class="nav-item"><a class="nav-link" href="/categories"><i class="fa fa-tags menu-icon"></i>  Categorias</a></li>
                <li class="nav-item"> <a class="nav-link" href="/purchases"> <i class="fa fa-shopping-cart menu-icon"></i>  Compras</a></li>
                <li class="nav-item"><a class="nav-link" href="/sales"><i class="fas fa-chart-pie menu-icon"></i>  Ventas</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">Clientes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="/clients">Todos</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="fas fa-truck menu-icon"></i>
              <span class="menu-title">Proveedores</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="/providers">Todos</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">

      @yield('content')

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
          @yield('footer')
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('/melody/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('/melody/vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('/melody/js/off-canvas.js') }}"></script>
  <script src="{{ asset('/melody/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('/melody/js/misc.js') }}"></script>
  <script src="{{ asset('/melody/js/settings.js') }}"></script>
  <script src="{{ asset('/melody/js/todolist.js') }}"></script>

  <script src="{{ asset('/melody/js/avgrund.js') }}"></script>
  <script src="{{ asset('/melody/js/alerts.js') }}"></script>

  {{-- {!!Html::script('melody/js/avgrund.js')!!} --}}
  {{-- {!!Html::script('melody/js/alerts.js')!!} --}}
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('/melody/js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->
  @yield('js')
</body>


</html>
