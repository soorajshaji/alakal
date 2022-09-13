<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>Alakal </title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/jquery-selectric/selectric.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">

  <link rel="stylesheet" href="{{asset('assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/logo/logo.png')}}' />
</head>
<style>
  @media only screen and (min-width: 992px) {
    .mobile_view{
      display: none;
    }
  }
  @media only screen and (min-width: 1200px) {
    .mobile_view{
      display: none;
    }
  }


</style>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1 " >
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li class="mobile_view"><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                  
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('assets/logo/logo.png')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                @include('layouts.navigation')
            </div>
          </li>
        </ul>
        
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img alt="image" src="{{asset('assets/logo/logo.png')}}" class="header-logo" height="150px" /> 
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="{{url('/')}}" class="nav-link"><i data-feather="monitor"></i><span>Form List</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/formIndex')}}" class="nav-link"><i data-feather="monitor"></i><span>Add</span></a>
              </li>

          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            @yield('formIndex')
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a style="text-transform: capitalize;font-size:13px;" target="blank" href="https://tinos.co.in">All Rights are Reserved Under Alakal. Powered by Tinos Security And Solution</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('assets/bundles/cleave-js/dist/cleave.min.js')}}"></script>
  <script src="{{asset('assets/bundles/cleave-js/dist/addons/cleave-phone.us.js')}}"></script>
  <script src="{{asset('assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
  <script src="{{asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{asset('assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{asset('assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
  <script src="{{asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
  <script src="{{asset('assets/bundles/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
  <!-- Page Specific JS File -->

    <!-- JS Libraies -->
    <script src="{{asset('assets/bundles/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Page Specific JS File -->
    <script src="{{asset('assets/js/page/datatables.js')}}"></script>
  <script src="{{asset('assets/js/page/forms-advanced-forms.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/js/custom.js')}}"></script>

  @stack('body-scripts')

</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>