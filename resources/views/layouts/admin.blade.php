<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home Page of Project</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="{{asset('css/style1.css')}}"> -->

  <script src="{{asset('js/app.js')}}"></script>
  @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-info">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block active">
          <a href="" class="main-heading text-white nav-link text-uppercase ">Automatic Exam Hall Arrangement</a>
        </li>
      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <!-- <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
        <span class="brand-text font-weight-bold">Admin Panel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left ml-5"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('colleges.index') }}" class="nav-link">
                <i class="fas fa-university"></i>
                <p>
                  College/Campus Manage
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="{{ route('departments.index')}}" class="nav-link">
                <i class="fas fa-building"></i>
                <p>
                  Department Manage
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>

            </li>

            <li class="nav-item has-treeview">
              <a href="{{route('faculties.index')}}" class="nav-link">
                <i class="fas fa-store"></i>
                <p>
                  Faculty Management
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{ route('room.index') }}" class="nav-link">
                <i class="fas fa-person-booth"></i>
                <p>
                  Room Management
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{ route('subjects.index') }}" class="nav-link">
                <i class="fas fa-book"></i>
                <p>
                  Subject Management
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{route('student.index')}}" class="nav-link">
                <i class="fas fa-user-graduate"></i>
                <p>
                  Student Management
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
        
            <li class="nav-item has-treeview">
              <a href="{{route('exam.index')}}" class="nav-link">
                <i class="fas fa-book-open"></i>
                <p>
                  Exam Management
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('seatallocations.index')}}" class="nav-link">
                <i class="fas fa-chair"></i>
                <p>
                  Seat Management
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="fas fa-chair"></i>
                <p>
                  Seat Arrangement
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>


            <li class="nav-item has-treeview">
              <a href="{{route('staff.index')}}" class="nav-link">
                <i class="fas fa-male"></i>
                <p>
                  Staff Management
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>

            <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}" id="logoutform">
                @csrf
              </form>
             
                <i class="nav-icon far fa-circle text-danger"></i>
                <a href="{{route('form.loginhome')}}">Logout</a>
              </button>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>&copy; Automatic Exam Hall Arrangement <a href="#"></a></strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> Beta
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('lugins/moment/moment.min.js')}}p"></script>
  <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('dist/js/demo.js')}}">

  </script>

  @stack('scripts')
</body>

</html>