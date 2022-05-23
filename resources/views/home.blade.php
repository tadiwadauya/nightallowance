
@extends('layouts.navbars')
@section('navs')
@endsection

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->


        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"> {{{ isset(Auth::user()->name) ? Auth::user()->first_name : Auth::user()->email }}}</i>

          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <a href="#" class="dropdown-item">
              <i class="fas fa-user mr-2"></i>Profile
             </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              Logout

            </a>

        </li>


      </ul>
    </nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Night Allowance </span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.html" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Transactions
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('transactions/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Transactions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('transactions/') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Transactions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('transactions/closedtrans') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Closed Transactions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('transactions/report') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reports</p>
                </a>
              </li>

            </ul>
          </li>
		   <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Drivers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('driver/driverslist') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Driver List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('driver/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Driver</p>
                </a>
              </li>


            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('users/') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('user/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">

            <a href="{{ route('logout') }}" class="nav-link"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" aria-expanded="false">

             <span>  {{ __('Logout') }}</span>

            </div>
         </a>


       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>

          </li>






        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">

                  <p>Create Transactions</p>
                </div>
                <div class="icon">
                  <i class="ion ion-calculator"></i>
                </div>
                <a href="{{ url('transactions/create') }}" class="small-box-footer">view <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">

                  <p>Active Transactions</p>
                </div>
                <div class="icon">
                  <i class="ion ion-calculator"></i>
                </div>
                <a href="{{ url('transactions/') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">


                  <p>Closed Transactions</p>
                </div>
                <div class="icon">
                  <i class="ion ion-calculator"></i>
                </div>
                <a href="{{ url('transactions/closedtrans') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">

                  <p>Reports</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ url('transactions/report') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">

                <h3 class="card-title">Recent Transactions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Folio</th>
                                    <th>Month</th>
                                    <th>Driver</th>
                                    <th>AMOUNT PAID IN ADVANCED</th>
                                    <th>REBOOKING AMOUNT</th>
                                    <th>CLOSING BALANCE</th>
                                    <th>TOTAL AMOUNT RECOVERD</th>
                                    <th>Done By</th>
                                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($transactions as $transaction)
                    @php
                     $driver = \App\Models\Driver::where('pay_number', $transaction->driver)->first();
                @endphp
                  <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->month }}</td>
                    <td>
                        @if ($driver)
                        {{$driver->first_name}} {{$driver->last_name}}
                        @endif
                    </td>
                    <td>{{ $transaction->amt_adv}}</td>
                    <td>{{ $transaction->rebooking_amt}}</td>
                    <td>{{ $transaction->closing_bal}}</td>
                    <td>{{ $transaction->total_amt_recoverd}}</td>
                    <td>{{ $transaction->done_by}}</td>
                    <td class="text-center">
                   <a href="{{ URL::to('/transactions/show/'.$transaction->id) }}" >  <i class="far fa-eye"></i></a>
                   <a href="{{ URL::to('/transactions/edit/'.$transaction->id) }}">   <i class="far fa-edit"></i></a>

                </td>
                </tr>
                @endforeach
            </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
              </div><!-- /.card-header -->

            </div>

          </section>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Whelson Transport</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.0
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
<script src="{{asset('plugin/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugin/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{asset('plugin/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{asset('plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{asset('plugin/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugin/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugin/moment/moment.min.js') }}"></script>
<script src="{{asset('plugin/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugin/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{asset('plugin/summernote/summernote-bs4.min.js"') }}></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugin/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js') }}"></script>



<script src="{{asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js') }}"></script>
<script src=".{{asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js') }}"></script>

<script src="{{asset('plugin/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{asset('plugin/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{asset('plugin/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>
</html>
