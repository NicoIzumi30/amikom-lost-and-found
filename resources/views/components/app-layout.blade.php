<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images') }}/logo.png" type="image/ico" />

    <title>Amikom Lost and Found</title>

<<<<<<< HEAD
  <!-- Bootstrap -->
  <link href="{{asset('vendors')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <!-- <link href="{{asset('vendors')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- NProgress -->
  <link href="{{asset('vendors')}}/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('vendors')}}/iCheck/skins/flat/green.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <!-- bootstrap-progressbar -->
  <link href="{{asset('vendors')}}/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset('vendors')}}/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="{{asset('vendors')}}/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="{{asset('vendors')}}/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('vendors')}}/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('vendors')}}/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('vendors')}}/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('vendors')}}/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="{{asset('build')}}/css/custom.css" rel="stylesheet">
  <style>
    .dataTables_paginate {
      margin-top: 15px !important;
      margin-bottom: 10px !important;
    }
  </style>
</head>

<body class="nav-md">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  @include('sweetalert::alert')
  @if ($errors->any())
  <script>
            swal({
                title: 'Failed',
                text: '{{  $errors->first() }}',
                type: 'error'
            });
        </script>
    @endif
    @if (session('success'))
        <script>
            swal({
                title: 'Success',
                text: '{{ session('success') }}',
                type: 'success'
            });
        </script>
    @endif
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><img src="{{asset('images')}}/logo.png" width="50" alt=""> <span>Lost and
                Found</span></a>
          </div>
          <div class="clearfix"></div>
=======
    <!-- Bootstrap -->
    <link href="{{ asset('vendors') }}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link href="{{ asset('vendors') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- NProgress -->
    <link href="{{ asset('vendors') }}/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors') }}/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors') }}/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('vendors') }}/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors') }}/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('vendors') }}/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('vendors') }}/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('vendors') }}/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
        rel="stylesheet">
    <link href="{{ asset('vendors') }}/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('vendors') }}/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('build') }}/css/custom.css" rel="stylesheet">
    <style>
        .dataTables_paginate {
            margin-top: 15px !important;
            margin-bottom: 10px !important;
        }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><img src="{{ asset('images') }}/logo.png" width="50"
                                alt=""> <span>Lost and
                                Found</span></a>
                    </div>
                    <div class="clearfix"></div>
>>>>>>> a928092ae53c8be0eeba9b0679ace960837dd864

                    <!-- menu profile quick info -->
                    <div class="profile clearfix my-2">
                        <div class="profile_pic">
                            <img src="{{ asset('images') }}/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            @if (Auth::check())
                                <h2>{{ auth()->user()->name }}</h2>
                            @endif

                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Main</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ route('administrator.dashboard') }}"><i class="fa fa-home"></i>
                                        Dashboard</a></li>
                                <li><a href="{{ route('administrator.employees') }}"><i class="fa fa-users"></i>
                                        Employees</a></li>
                                <li><a href="{{ route('administrator.students') }}"><i class="fa fa-user-graduate"></i>
                                        Students</a></li>
                                <li><a href="{{ route('administrator.lostItems') }}"><i
                                            class="fa fa-person-circle-question"></i> Lost
                                        Items</a></li>
                                <li><a href="{{ route('administrator.itemFound') }}"><i class="fa fa-joget"></i> Item
                                        Found</a></li>
                                <li><a href="{{ route('administrator.announcement') }}"><i class="fa fa-bullhorn"></i>
                                        Announcement</a></li>
                                <li><a href="{{ route('administrator.getStarted') }}"><i class="fa fa-circle-play"></i>
                                        Get started</a></li>
                                <li><a href="{{ route('administrator.profile') }}"><i class="fa fa-user-edit"></i>
                                        Profile</a></li>
                                <li><a href="{{ route('administrator.logout') }}"><i class="fa fa-power-off"></i>
                                        Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->

                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu pb-3">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            {{ $slot }}
            <!-- /page content -->

<<<<<<< HEAD
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Main</h3>
              <ul class="nav side-menu">
                <li><a href="{{route('administrator.dashboard.index')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                <li><a href="{{route('administrator.employees.index')}}"><i class="fa fa-users"></i> Employees</a></li>
                <li><a href="{{route('administrator.students.index')}}"><i class="fa fa-user-graduate"></i> Students</a>
                </li>
                <li><a href="{{route('administrator.category.index')}}"><i class="fa fa-layer-group"></i>Category</a></li>
                <li><a href="{{route('administrator.lostItems.index')}}"><i class="fa fa-person-circle-question"></i>
                    Lost
                    Items</a></li>
                <li><a href="{{route('administrator.itemFound.index')}}"><i class="fa fa-joget"></i> Item Found</a></li>
                <li><a href="{{route('administrator.announcement.index')}}"><i class="fa fa-bullhorn"></i>
                    Announcement</a></li>
                <li><a href="{{route('administrator.getStarted.index')}}"><i class="fa fa-circle-play"></i> Get
                    started</a></li>
                <li><a href="{{route('administrator.profile.index')}}"><i class="fa fa-user-edit"></i> Profile</a></li>
                <li><a href="{{route('administrator.logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->

          <!-- /menu footer buttons -->
=======
            <!-- footer content -->
            <footer>
                <div class="pull-right text-center">
                    © Amikom Lost and Found
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
>>>>>>> a928092ae53c8be0eeba9b0679ace960837dd864
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendors') }}/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors') }}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors') }}/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors') }}/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{ asset('vendors') }}/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{ asset('vendors') }}/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('vendors') }}/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{ asset('vendors') }}/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{ asset('vendors') }}/skycons/skycons.js"></script>


    <!-- Flot -->
    <script src="{{ asset('vendors') }}/Flot/jquery.flot.js"></script>
    <script src="{{ asset('vendors') }}/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('vendors') }}/Flot/jquery.flot.time.js"></script>
    <script src="{{ asset('vendors') }}/Flot/jquery.flot.stack.js"></script>
    <script src="{{ asset('vendors') }}/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('vendors') }}/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{ asset('vendors') }}/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{ asset('vendors') }}/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{ asset('vendors') }}/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('vendors') }}/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{ asset('vendors') }}/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{ asset('vendors') }}/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('vendors') }}/moment/min/moment.min.js"></script>
    <script src="{{ asset('vendors') }}/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Datatable -->
    <!-- Datatables -->
    <script src="{{ asset('vendors') }}/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('vendors') }}/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('vendors') }}/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('vendors') }}/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('vendors') }}/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{ asset('vendors') }}/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('vendors') }}/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('vendors') }}/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{ asset('vendors') }}/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build') }}/js/custom.min.js"></script>

    <script>
        if ($('#lostItems').length) {

            var ctx = document.getElementById("lostItems");
            var mybarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [{
                        label: 'Lost Items',
                        backgroundColor: "#C80036",
                        data: [51, 30, 40, 28, 92, 50, 45]
                    }, {
                        label: 'Has Been Found',
                        backgroundColor: "#F1E5D1",
                        data: [41, 56, 25, 48, 72, 34, 12]
                    }]
                },

                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

        }
        if ($('#foundItem').length) {

            var ctx = document.getElementById("foundItem");
            var mybarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [{
                        label: 'Found Item',
                        backgroundColor: "#5DEBD7",
                        data: [51, 30, 40, 28, 92, 50, 45]
                    }, {
                        label: 'Item Taken',
                        backgroundColor: "#4793AF",
                        data: [41, 56, 25, 48, 72, 34, 12]
                    }]
                },

                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

        }
        if ($('#visitors').length) {

            var ctx = document.getElementById("visitors");
            var mybarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                        "October", "November", "December"
                    ],
                    datasets: [{
                        label: 'Visitor',
                        backgroundColor: "#6DC5D1",
                        data: [51, 30, 40, 28, 92, 50, 45, 90, 100, 80, 70, 60]
                    }]
                },

                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

        }
    </script>
</body>

</html>