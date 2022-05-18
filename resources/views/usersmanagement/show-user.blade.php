
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
              <li>
                  <a href="apps_todoList.html"> Deleted Transactions</a>
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
                                    <h4>User Details</h4>
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
                                                   User Details

                                                </div>

                                                <br>
                                                @if ($user->name)

                                                    <div class="col-sm-5 col-6 text-larger">
                                                        <strong>
                                                            Username:
                                                        </strong>

                                                        {{$user->name}}
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="border-bottom"></div>

                                                @endif

                                                <br>
                                                @if ($user->paynumber)

                                                    <div class="col-sm-5 col-6 text-larger">
                                                        <strong>
                                                            Paynumber:
                                                        </strong>

                                                        {{$user->paynumber}}
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="border-bottom"></div>

                                                @endif

                                                <br>
                                                @if ($user)

                                                    <div class="col-sm-5 col-6 text-larger">
                                                        <strong>
                                                            Fullname:
                                                        </strong>

                                                        {{$user->first_name}} {{$user->last_name}}
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="border-bottom"></div>

                                                @endif

                                                <br>
                                                @if ($user->Departemnet)

                                                    <div class="col-sm-5 col-6 text-larger">
                                                        <strong>
                                                            Departement:
                                                        </strong>

                                                        {{$user->Departement}}
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="border-bottom"></div>

                                                @endif

                                                <br>
                                                @if ($user->Position)

                                                    <div class="col-sm-5 col-6 text-larger">
                                                        <strong>
                                                            Position:
                                                        </strong>

                                                        {{$user->Position}}
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="border-bottom"></div>

                                                @endif

                                                <br>
                                                @if ($user->mobile)

                                                    <div class="col-sm-5 col-6 text-larger">
                                                        <strong>
                                                            Mobile:
                                                        </strong>

                                                        {{$user->mobile}}
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="border-bottom"></div>

                                                @endif

                                                <br>
                                                @if ($user->email)

                                                    <div class="col-sm-5 col-6 text-larger">
                                                        <strong>
                                                            Email:
                                                        </strong>

                                                        {{$user->email}}
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="border-bottom"></div>

                                                @endif



                                                @if ($user->created_at)

                                                    <div class="col-sm-5 col-6 text-larger">
                                                        <strong>
                                                            Recorded On:
                                                        </strong>

                                                        {{$user->created_at}}
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="border-bottom"></div>

                                                @endif

                                                <br>
                                                @if ($user->updated_at)

                                                    <div class="col-sm-5 col-6 text-larger">
                                                        <strong>
                                                            Last Modified On:
                                                        </strong>

                                                        {{$user->updated_at}}
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
