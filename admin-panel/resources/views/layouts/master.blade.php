
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>9Brainz_Plateform</title>
   <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="stylesheet" href="{{asset('css/datatable.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
@yield('page-css')


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>9Brainz Plateform</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/avatar5.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="{{ route('profiles')}}"><i class="fa fa-circle text-success"></i> Profile</a>
        </div>
      </div>

   
      <ul class="sidebar-menu" data-widget="tree" style="text-align: left;">
        <li class="header">HEADER</li>

     
  <li "{{ request()->is('home*') ? 'active' : '' }}"><a href="{{ route('home')}}"><i class="fa fa-user"></i> <span>Dashboard</span></a></li>

  <li "{{ request()->is('application*') ? 'active' : '' }}"><a href="{{ route('application.index')}}"><i class="fa fa-mobile"></i> <span>Apps</span></a></li>
       

        <li class="">

           <a href="{{route('logout') }}">
             <i class="fa fa-power-off text-red"></i> <span>Logout</span>
            </a>
         
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content container-fluid">
        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->

    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="http://9brainz.com/new">9Brainz</a>.</strong> All rights reserved.
  </footer>
</div>


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/toastr.jquery.min.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<script src="{{asset('js/btnsubmitdisabled.js')}}"></script>


{!! Toastr::message() !!}
@yield('page-js')
</body>
</html>
