@extends('layouts.navbars')
@section('navs')
@endsection

<!-- Preloader -->
@include('components.preloader')

@include('components.navbar')

@include('components.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pt-4">
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">

                            <p>Active Transactions</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-calculator"></i>
                        </div>
                        <a href="{{ url('transactions/') }}" class="small-box-footer">view <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">

                            <p>Closed Transactions</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-calculator"></i>
                        </div>
                        <a href="{{ url('transactions/closedtrans') }}" class="small-box-footer">View <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">


                            <p>Driver Management</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-user"></i>
                        </div>
                        <a href="{{ url('driver/driverslist') }}" class="small-box-footer">View <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">

                            <p>User Management</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ url('users/') }}" class="small-box-footer">View <i
                                class="fas fa-arrow-circle-right"></i></a>
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
                                                                {{ $driver->first_name }} {{ $driver->last_name }}
                                                            @endif
                                                        </td>
                                                        <td>{{ $transaction->amt_adv }}</td>
                                                        <td>{{ $transaction->rebooking_amt }}</td>
                                                        <td>{{ $transaction->closing_bal }}</td>
                                                        <td>{{ $transaction->total_amt_recoverd }}</td>
                                                        <td>{{ $transaction->done_by }}</td>
                                                        <td class="text-center">
                                                            <a
                                                                href="{{ URL::to('/transactions/show/' . $transaction->id) }}">
                                                                <i class="far fa-eye"></i></a>
                                                            <a
                                                                href="{{ URL::to('/transactions/edit/' . $transaction->id) }}">
                                                                <i class="far fa-edit"></i></a>

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
        </div>
    </section>
</div>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugin/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugin/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugin/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugin/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugin/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugin/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugin/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugin/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugin/summernote/summernote-bs4.min.js"') }}></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugin/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>



<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src=".{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>

<script src="{{ asset('plugin/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugin/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugin/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
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
