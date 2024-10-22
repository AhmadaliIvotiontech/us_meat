<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="{{ asset('public/backend/images/logo-fav.png') }}" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                       @if (Session::get('user'))
                       {{Session::get('user')['name']}}
                       @endif
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="{{ route('SubAdminProfile') }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        {{-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> --}}
                        <!-- text-->
                        {{-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a> --}}
                        <!-- text-->
                        {{-- <div class="dropdown-divider"></div> --}}
                        <!-- text-->
                        {{-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a> --}}
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="{{ route('LogOut') }}" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
             
                <li class="nav-small-cap">---Sub Management </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">-- <span class="hide-menu">User Management</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('addUser') }}">Add</a></li>
                        <li><a href="{{ route('listUser') }}">List</a></li>
                    </ul>
                </li>
                
                
       
              
                <!-- <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li> -->
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>