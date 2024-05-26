<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/daterangepicker/daterangepicker.css">

  {{-- Data Tables --}}
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin/') }}/dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('assets/admin/') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('assets/admin/') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TANAMAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" @if ($title == 'Dashboard') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Data</li>
          <li class="nav-item">
             <a href="{{route('bagian.index')}}" @if ($title == 'Bagian') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Bagian
              </p>
            </a>
          </li>
          
          <li class="nav-item">
              <a href="{{ route('perbanyak.index')}}" @if ($title == 'Perbanyak') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Perbanyak
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('petak.index')}}" @if ($title == 'Petak') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Petak
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('kebun.index')}}" @if ($title == 'Kebun') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kebun
              </p>
            </a>
          </li>
          <li class="nav-header">Tanaman</li>
          <li class="nav-item">
            <a href="{{ route('tanaman.index')}}" @if ($title == 'Tanaman') class="nav-link active" @else class="nav-link" @endif>
             <i class="nav-icon fa fa-leaf"></i>
             <p>
               Tanaman
             </p>
           </a>
         </li>
          <li class="nav-item">
             <a href="{{ route('gambar.index')}}" @if ($title == 'Gambar') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon far fa-images"></i>
              <p>
                Gambar
              </p>
            </a>
          </li>
          
         <li class="nav-item">
          <a href="{{ route('penanaman.index')}}" @if ($title == 'Penanaman') class="nav-link active" @else class="nav-link" @endif>
           <i class="nav-icon fas fa-columns"></i>
           <p>
             Penanaman
           </p>
         </a>
       </li>
       
       <li class="nav-header">Petugas</li>
       <li class="nav-item">
          <a href="{{ route('admin.petugas')}}" @if ($title == 'User') class="nav-link active" @else class="nav-link" @endif>
          <i class="nav-icon far fa-user"></i>
          <p>
            User
          </p>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="{{ route('admin.slider')}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Slider
          </p>
        </a>
      </li>
         
        <li class="nav-item">
          <a href="{{ route('admin.logout')}}" @if ($title == 'Logout') class="nav-link active" @else class="nav-link" @endif>
           <i class="nav-icon fas fa-user"></i>
           <p>
             Logout
           </p>
         </a>
       </li>
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="{{ asset('assets/admin/') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/admin/') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/admin/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/admin/') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/admin/') }}/dist/js/adminlte.js"></script>
<!-- Select2 -->
<script src="{{ asset('assets/admin/') }}/plugins/select2/js/select2.full.min.js"></script>
<!-- Ekko Lightbox -->
<script src="{{ asset('assets/admin/') }}/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/datatables-responsive/js/respon   sive.bootstrap4.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{ asset('assets/admin/') }}/js/custom.js"></script>
@yield('js')

<!-- Filterizr-->
<script src="{{ asset('assets/admin') }}/plugins/filterizr/jquery.filterizr.min.js"></script>

<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
});
</script>

<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

</body>
</html>
