<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href=""><img src="../assets/images/logo.svg" width="25" alt="Salus"><span class="m-l-10">Salus</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small> Admin</small>
                    </div>
                </div>
            </li>            
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{route('admin.personal')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href=""><i class="zmdi zmdi-account"></i><span>My Profile</span></a></li>
           
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-account"></i> <span>Dependants</span></a>
                <ul class="ml-menu">
                <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('adddependents')}}"><span>Add Dependent</span></a></li>  
                    <li class="{{ Request::segment(2) === 'my-profile' ? 'active' : null }}"><a href="{{route('dependant')}}">View Dependants</a></li>
                </ul>
            </li>
            @if(auth()->user()->is_admin == 1)
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-account"></i> <span>Hospital</span></a>
                <ul class="ml-menu">
                <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('addhospital')}}"><span>Add Hospital</span></a></li>  
                    <li class="{{ Request::segment(2) === 'my-profile' ? 'active' : null }}"><a href="{{route('hospital')}}">View Hospital</a></li>
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-account"></i> <span>Packages</span></a>
                <ul class="ml-menu">
                <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('addpackages')}}"><span>Add Packages</span></a></li>  
                    <li class="{{ Request::segment(2) === 'my-profile' ? 'active' : null }}"><a href="{{route('packages')}}">View Packages</a></li>
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-account"></i> <span>Transaction</span></a>
                <ul class="ml-menu">
                <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href=""><span>Today Transaction</span></a></li>  
                    <li class="{{ Request::segment(2) === 'my-profile' ? 'active' : null }}"><a href="">Total Transaction</a></li>
                </ul>
            </li>
            @endif
            @if(auth()->user()->is_admin == 2)
            <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-account"></i> <span>Billings</span></a>
                <ul class="ml-menu">
                <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('billings')}}"><span>My Billings</span></a></li>  
                    <li class="{{ Request::segment(2) === 'my-profile' ? 'active' : null }}"><a href="">Trsaction History</a></li>
                </ul>
            </li>
            @endif
            <!-- <li class="{{ Request::segment(1) === 'project' ? 'active open' : null }}">
                <a href="#Project" class="menu-toggle"><i class="zmdi zmdi-assignment"></i> <span>Project</span></a>
                <ul class="ml-menu">
                   
                    
                <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul> -->

             <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   <i class="zmdi zmdi-account"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            
            
           
        </ul>
    </div>
</aside>
