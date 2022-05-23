

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
		   <li class="nav-item ">
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
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="content-wrapper">
    <div class="layout-px-spacing">
<div class="d-flex flex-column-fluid">
<div class=" container ">
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-custom gutter-b">
                <div class="card-body ">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Edit User</h4>
                                </div>
                            </div>
                        </div>
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Edit User</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form action="{{ route('user.update',$user->id)}}"  method="POST">
                @method('put')
                @csrf
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text"name="name"  value="{{$user->name}}"  class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" name="paynumber" value="{{$user->paynumber}}"   class="form-control @error('paynumber') is-invalid @enderror" >
                            @error('paynumber')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                    </div>


                        <div class="row mb-4">
                            <div class="col">
                                <input type="text"name="first_name"  value="{{$user->first_name}}"  class="form-control @error('first_name') is-invalid @enderror">
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <input type="text" name="last_name"    value="{{$user->last_name}}"  class="form-control @error('last_name') is-invalid @enderror" >
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" name="Department"     value="{{$user->Department}}"  class="form-control @error('Department') is-invalid @enderror">
                                @error('Department')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <input type="text"name="Position" value="{{$user->Position}}"  class="form-control @error('Position') is-invalid @enderror">
                                @error('Position')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">

                            <div class="col">
                                <input type="text" name="mobile"   value="{{$user->mobile}}"    class="form-control @error('mobile') is-invalid @enderror" placeholder="Mobile number">
                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <input type="text"name="email"  value="{{$user->email}}"  class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-4">
                            <div class="col">
                                <input type="password"  name="password" id="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" placeholder="e.g 12345678"  />

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror"
                                    placeholder="confirm password"  />

                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                        <input type="submit" value="Save" class="btn btn-info">
                        <input type="submit" value="Reset"  class="btn btn-warning">
                    </form>



        </div>
    </div>
</div>
<script >

    function updateDue() {

    var total = parseFloat(document.getElementById("amtadv").value);
    var val2 = parseFloat(document.getElementById("rbknamt").value);
    var val3 = parseFloat(document.getElementById("rbknamt1").value);
    // to make sure that they are numbers
    if (!total) { total = 0; }
    if (!val2) { val2 = 0; }
    if (!val3) { val3 = 0; }
    var ansD = document.getElementById("clsnbal");
    ansD.value = total - val2 - val3;
    }

    </script>

    {{-- <script>
    function adds() {
    var x = parseFloat(document.getElementById("amt").value);
    var y = parseFloat(document.getElementById("dysrbkn").value)
    document.getElementById("rbknamt").value = x * y;
    }
    </script>

    <script>
    function addsH() {
    var x = parseFloat(document.getElementById("amt").value);
    var y = parseFloat(document.getElementById("dysrbkn1").value)
    document.getElementById("rbknamt1").value = x * y;
    }
    </script> --}}

    <script >

    // function updateDue1() {

    // var total = parseFloat(document.getElementById("amtadv").value);
    // var val2 = parseFloat(document.getElementById("rbknamt").value);
    // var val3 = parseFloat(document.getElementById("rebooking_amt2").value);

    // // to make sure that they are numbers
    // if (!total) { total = 0; }
    // if (!val2) { val2 = 0; }
    // if (!val3) { val3 = 0; }
    // var ansD = document.getElementById("clsnbal");
    // ansD.value = total - val2;
    // }

    // </script>
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
        <script src="{{asset('plugin/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Select2 -->
        <script src="{{asset('plugin/select2/js/select2.full.min.js') }}"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="{{asset('plugin/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
        <!-- InputMask -->
        <script src="{{asset('plugin/moment/moment.min.js') }}"></script>
        <script src="{{asset('plugin/inputmask/jquery.inputmask.min.js') }}"></script>
        <!-- date-range-picker -->
        <script src="{{asset('plugin/daterangepicker/daterangepicker.js') }}"></script>
        <!-- bootstrap color picker -->
        <script src="{{asset('plugin/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('plugin/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <!-- Bootstrap Switch -->
        <script src="{{asset('plugin/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
        <!-- BS-Stepper -->
        <script src="{{asset('plugin/bs-stepper/js/bs-stepper.min.js') }}"></script>
        <!-- dropzonejs -->
        <script src="{{asset('plugin/dropzone/min/dropzone.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('dist/js/demo.js') }}"></script>
        <!-- Page specific script -->
        <script>
          $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
              timePicker: true,
              timePickerIncrement: 30,
              locale: {
                format: 'MM/DD/YYYY hh:mm A'
              }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
              {
                ranges   : {
                  'Today'       : [moment(), moment()],
                  'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                  'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                  'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                  'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
              },
              function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
              }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
              format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
              $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function(){
              $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

          })
          // BS-Stepper Init
          document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
          })

          // DropzoneJS Demo Code Start
          Dropzone.autoDiscover = false

          // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
          var previewNode = document.querySelector("#template")
          previewNode.id = ""
          var previewTemplate = previewNode.parentNode.innerHTML
          previewNode.parentNode.removeChild(previewNode)

          var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
          })

          myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
          })

          // Update the total progress bar
          myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
          })

          myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
          })

          // Hide the total progress bar when nothing's uploading anymore
          myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
          })

          // Setup the buttons for all transfers
          // The "add files" button doesn't need to be setup because the config
          // `clickable` has already been specified.
          document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
          }
          document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
          }
          // DropzoneJS Demo Code End
        </script>




    <script >

    function updateDue2() {

    var total = parseFloat(document.getElementById("clsnbal").value);
    var val2 = parseFloat(document.getElementById("rec").value);

    // to make sure that they are numbers
    if (!total) { total = 0; }
    if (!val2) { val2 = 0; }

    var ansD = document.getElementById("amtrec");
    ansD.value = total - val2;
    }

    </script>

    <script>
    function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
    document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

    }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>

    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="assets/js/app.js')}}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('plugins/select2/custom-select2.js')}}"></script>

    </body>
    </html>





