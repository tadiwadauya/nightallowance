<?php
$driver = \App\Models\Driver::where('pay_number', $transaction->driver)->firstOrFail();
?>
@extends('layouts.navbar')
@section('nav')
@endsection

<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Layouts</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->


<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

  <nav id="sidebar">
      <div class="shadow-bottom"></div>

      <ul class="list-unstyled menu-categories" id="accordionExample">
          <li class="menu">
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <div class="">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                      <span>Drivers</span>
                  </div>
                  <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                  </div>
              </a>
              <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#accordionExample">
                  <li>
                      <a href="{{ url('driver/driverslist') }}"> Driver List </a>
                  </li>
                  <li>
                      <a href="{{ url('driver/create') }}"> Add Driver </a>
                  </li>
                  <li>
                    <a href="{{ url('driver/create') }}"> Terminate Driver </a>
                </li>
              </ul>
          </li>

          <li class="menu">
              <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <div class="">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                      <span>Transactions</span>
                  </div>
                  <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                  </div>
              </a>
              <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">

                <li>
                    <a href="{{ url('transactions/create') }}"> Create Transactions  </a>
                </li>
                <li>
                    <a href="{{ url('transactions/') }}"> Active Transactions </a>
                </li>
                <li>
                    <a href="{{ url('transactions/closedtrans') }}">Closed Transactions</a>
                </li>
                <li>
                    <a href="{{ url('transactions/report') }}">Report</a>
                </li>
              </ul>
          </li>



          <li class="menu">
            <a href="#app1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                    <span>Users</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="app1" data-parent="#accordionExample">
              <li>
                  <a href="{{ url('users/') }}"> User List </a>
              </li>
              <li>
                  <a href="{{ url('user/create') }}"> Add user  </a>
              </li>


            </ul>
        </li>


          <li class="menu">

            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" aria-expanded="false" class="dropdown-toggle">
             <div class=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
             <span>  {{ __('Logout') }}</span>

            </div>
         </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>

          </li>

      </ul>

  </nav>
</div>
<div id="content" class="main-content">
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
                                      <div class="widget-content widget-content-area">
                            <form action="{{url('/update/'.$transaction->id)}}"  method="post" >

                                @csrf
                                @method('put')

                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <select  class="form-control  basic" name="driver" id="driver">

                                                <option value="{{$transaction->driver}}">{{ $driver->first_name}} {{ $driver->last_name }}</option>
                                                @if ($drivers)
                                                    @foreach($drivers as $driver)
                                                        <option value="{{ $driver->pay_number }}" >{{ $driver->first_name }} {{ $driver->last_name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        @if ($errors->has('driver'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('driver') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                            <div class="form-row mb-4">
                            <div class="form-group col-md-2">
                            <label for="inputEmail4">AMOUNT PAID IN ADVANCE</label>
                            <input type='text' value="{{$transaction->amt_adv}}" name="amt_adv" id="amtadv"  class="form-control" onchange="updateDue()" />
                            </div>







            </div>
            <div class="form-row mb-4">

        <div class="form-group col-md-2">
            <label for="inputEmail4">REBOOKING AMOUNT</label>
            <input type='text' id="rbknamt" class="form-control"  value="{{$transaction->rebooking_amt}}"  name="rebooking_amt" onkeyup="updateDue()" onkeyup="updateDue1()" /></td>
            </div>

        <div class="form-group col-md-2">
            <label for="inputEmail4">2nd REBOOKING AMOUNT</label>
            <input type='text' id="rbknamt1" class="form-control"  value="{{$transaction->rebooking_amt2}}"  name="rebooking_amt2"  onkeyup="updateDue()" onchange="updateDue2()" /></td>
            </div>
            </div>

            <div class="form-group col-md-6">
            <label for="inputEmail4">CLOSING BALANCE</label>
            <input type='text' id="clsnbal"  value="{{$transaction->closing_bal}}"  name="closing_bal" class="form-control"/>
            </div>

            <div class="form-group col-md-6">
            <label for="inputEmail4">FINAL RECOVERY</label>
            <input type='text' id="rec"  value="{{$transaction->final_recovery}}"  name="final_recovery" class="form-control" onkeyup="updateDue2()"   />
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">TOTAL AMOUNT RECOVERD</label>
            <input type='text' class="form-control"  value="{{$transaction->total_amt_recoverd}}"  name="total_amt_recoverd"  id="amtrec"  />
            </div>

            <div class="form-row mb-4">
                <div class="form-group col-md-6">
                    <div class="input-group">

                        <select name="status" class="form-control" id="status">
                            <option value="active">Active</option>
                            <option value="closed">Close</option>
                          </select>

                    </div>

                </div>
            </div>
            <input type="submit" value="Update" class="btn btn-info">
        </form>

             </div>
                    </div>
                </div>
            </div>
            </form><script >

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