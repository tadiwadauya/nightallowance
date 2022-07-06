@extends('layouts.navbars')
@section('navs')
@endsection

<!-- Preloader -->
@include('components.preloader')

@include('components.navbar')

@include('components.sidebar')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Active Transactions</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    @if (Auth::user()->is_hr != true)
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"> <a href="{{ url('transactions/create') }}">Create
                                    Transaction</a></li>
                        </ol>
                    @endif
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
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

                            <h3 class="card-title">Active Transactions</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
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
                                                    {{ $driver->first_name }} {{ $driver->last_name }} -
                                                    {{ $driver->pay_number }}
                                                @endif
                                            </td>
                                            <td>{{ $transaction->amt_adv }}</td>
                                            <td>{{ $transaction->rebooking_amt }}</td>
                                            <td>{{ $transaction->closing_bal }}</td>
                                            <td>{{ $transaction->total_amt_recoverd }}</td>
                                            <td>{{ $transaction->done_by }}</td>
                                            <td class="text-center">
                                                <a href="{{ URL::to('/transactions/show/' . $transaction->id) }}"> <i
                                                        class="far fa-eye"></i></a>
                                                <a href="{{ URL::to('/transactions/edit/' . $transaction->id) }}"> <i
                                                        class="far fa-edit"></i></a>

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
