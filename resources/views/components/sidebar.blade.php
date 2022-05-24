<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @if (Auth::user()->is_admin == true)
        <a href="{{ url('/admin-home') }}" class="brand-link">
            <img src="{{ asset('dist/img/favicon.png') }}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Night Allowance </span>
        </a>
    @else
        <a href="{{ url('/home') }}" class="brand-link">
            <img src="{{ asset('dist/img/favicon.png') }}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Night Allowance </span>
        </a>
    @endif

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    @if (Auth::user()->is_admin == true)
                        <a href="{{ url('/admin-home') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Home
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    @else
                        <a href="{{ url('/home') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Home
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    @endif
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
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
                        @if (Auth::user()->is_admin == true)
                            <li class="nav-item">
                                <a href="{{ url('driver/create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Driver</p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
                @if (Auth::user()->is_admin == true)
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
                @endif

                <li class="nav-item">

                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" aria-expanded="false">

                        <span> {{ __('Logout') }}</span>

                    </a>
    </div>

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
