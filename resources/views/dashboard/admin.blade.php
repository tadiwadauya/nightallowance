
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
                            <li class="breadcrumb-item active" aria-current="page"><span>{{{ isset(Auth::user()->name) ? Auth::user()->first_name : Auth::user()->email }}}</span></li>
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
            <a href="{{ url('/dashboard')}}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span>Dashboard</span>
                </div>
            </a>
          </li>
          <li class="menu">
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <div class="">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
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
   <!--  BEGIN CONTENT AREA  -->
   <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-info">
                                <div class="inner">
                                  <h4>Transactions</h4>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-plus"></i>
                                </div>
                                <a href="AdminPlaceOrder.aspx" class="small-box-footer">Create <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-success">
                                <div class="inner">
                                  <h4>Drivers</h4>
                                </div>
                                <div class="icon">
                                       <ion-icon name="document-text-outline"></ion-icon>
                                </div>
                                <a href="AdminOrders.aspx" class="small-box-footer">Orders<i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-warning">
                                <div class="inner">
                                  <h4>Active</h4>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-plus"></i>
                                </div>
                                <a href="AdminPlaceRequisition.aspx" class="small-box-footer">Create<i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-danger">
                                <div class="inner">
                                  <h4>Closed</h4>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-people"></i>
                                </div>
                                <a href="AdminRequisitions.aspx" class="small-box-footer">Requests<i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                          </div>
                  
                        <div class="widget-content widget-content-area br-6">
                            <ul class="breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ url('transactions/create') }}">Create Transaction</a>
                            </li>

                        </ul>
                            <div class="table-responsive mb-4 mt-4">
                                <table id="alter_pagination" class="table table-hover" style="width:100%">
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
                </div>
            </div>
        </div>


        <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
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

<!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
<script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#alter_pagination').DataTable( {
            "pagingType": "full_numbers",
            "oLanguage": {
                "oPaginate": {
                    "sFirst": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>',
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                    "sLast": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    } );
</script>
<!-- END PAGE LEVEL CUSTOM SCRIPTS -->

 <!--  BEGIN CUSTOM SCRIPTS FILE  -->
 <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
 <script src="{{asset('plugins/select2/select2.min.js')}}"></script>
 <script src="{{asset('plugins/select2/custom-select2.js')}}"></script>
