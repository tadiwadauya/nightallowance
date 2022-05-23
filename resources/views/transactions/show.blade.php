<?php
$driver = \App\Models\Driver::where('pay_number', $transaction->driver)->firstOrFail();
?>
@extends('layouts.navbars')
@section('navs')
@endsection
<!-- Preloader -->
@include('components.preloader')

@include('components.navbar')

@include('components.sidebar')

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
                                            <h4>NIGHT ALLOWANCE TRANSACTION</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content-wrapper">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="card-header">
                                                            Driver Night allowance Details
                                                        </div>
                                                        <br>
                                                        @if ($transaction->id)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    Transaction:
                                                                </strong>

                                                                {{ $transaction->id }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($driver)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    Driver:
                                                                </strong>

                                                                {{ $driver->first_name }} {{ $driver->last_name }} -
                                                                {{ $driver->paynumber }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->amt_adv)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    AMOUNT PAID IN ADVANCE:
                                                                </strong>

                                                                {{ $transaction->amt_adv }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->percentage)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    PERCENTAGE:
                                                                </strong>

                                                                {{ $transaction->percentage }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->amount)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    AMOUNT:
                                                                </strong>

                                                                {{ $transaction->amount }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->days_truck)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    DAYS UTILIZED IN TRUCK:
                                                                </strong>

                                                                {{ $transaction->days_truck }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->amt_per_day)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    AMOUNT PER DAY:
                                                                </strong>

                                                                {{ $transaction->amt_per_day }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>

                                                        @if ($transaction->days_truck)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    DAYS UTILIZED IN TRUCK:
                                                                </strong>

                                                                {{ $transaction->days_truck }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->amt_per_day)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    AMOUNT PER DAY:
                                                                </strong>

                                                                {{ $transaction->amt_per_day }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif


                                                        <br>
                                                        @if ($transaction->rebooking_amt)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    REBOOKING AMOUNT:
                                                                </strong>

                                                                {{ $transaction->rebooking_amt }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->rebooking_amt2)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    2nd REBOOKING AMOUNT:
                                                                </strong>

                                                                {{ $transaction->rebooking_amt2 }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->closing_bal)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    CLOSING BALANCE:
                                                                </strong>

                                                                {{ $transaction->closing_bal }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->final_recovery)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    FINAL RECOVERY:
                                                                </strong>

                                                                {{ $transaction->final_recovery }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->total_amt_recoverd)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    TOTAL AMOUNT RECOVERD:
                                                                </strong>

                                                                {{ $transaction->total_amt_recoverd }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->done_by)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    Done By:
                                                                </strong>

                                                                {{ $transaction->done_by }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->status)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    Status:
                                                                </strong>

                                                                {{ $transaction->status }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif
                                                        <br>

                                                        @if ($transaction->created_at)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    Recorded On:
                                                                </strong>

                                                                {{ $transaction->created_at }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                        <br>
                                                        @if ($transaction->updated_at)
                                                            <div class="col-sm-5 col-6 text-larger">
                                                                <strong>
                                                                    Last Modified On:
                                                                </strong>

                                                                {{ $transaction->updated_at }}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="border-bottom"></div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('plugin/jquery/jquery.min.js') }}">
    < /> <!--jQuery UI 1.11 .4-- > <
    script src = "{{ asset('plugin/jquery-ui/jquery-ui.min.js') }}" >
</script>
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
<script src="{{ asset('plugin/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('plugin/select2/js/select2.full.min.js') }}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('plugin/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('plugin/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugin/inputmask/jquery.inputmask.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('plugin/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('plugin/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugin/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('plugin/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- BS-Stepper -->
<script src="{{ asset('plugin/bs-stepper/js/bs-stepper.min.js') }}"></script>
<!-- dropzonejs -->
<script src="{{ asset('plugin/dropzone/min/dropzone.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({
            icons: {
                time: 'far fa-clock'
            }
        });

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
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'))
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

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
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
        file.previewElement.querySelector(".start").onclick = function() {
            myDropzone.enqueueFile(file)
        }
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
