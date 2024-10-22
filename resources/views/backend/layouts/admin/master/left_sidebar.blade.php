<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body"><br><br><br>
                <div>
                    <img src="{{ asset('public/backend/images/logo-fav.png') }}" alt="user-img" class="img-circle">
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                       @if (Session::get('user'))
                       {{Session::get('user')['name']}}
                       @endif
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY custom-menu">
                        <!-- text-->
                        <a href="{{ route('AdminProfile') }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
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
             
                <!-- <li class="nav-small-cap">---Role Management </li>
                <li> <a class=" waves-effect waves-dark" href="{{ route('AdminProfile') }}"><span>Profile</span></a></li> -->
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"> <span class="hide-menu">Admin Management</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('addUser') }}">Add</a></li>
                        <li><a href="{{ route('listUser') }}">List</a></li>
                    </ul>
                </li>
                

                <li class="nav-small-cap">---Page  Management </li>
                
                
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Inicio</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('banner_master') }}">Banners Slider</a></li>
                        <li><a href="{{ route('meat_slider_master') }}">Meat Slider</a></li>
                        <li><a href="{{ route('testimonial_master') }}">Testimonials</a></li>
                        <li><a href="{{ route('where_to_buy_master') }}">Where to buy</a></li>
                        <li><a href="{{ route('home_sections') }}">Sections</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Experiencia</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('competitors') }}">competitors</a></li>
                        <li><a href="{{ route('experience_sections') }}">Sections</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Cortes</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('cuts') }}">Cuts</a></li>
                        <li><a href="{{ route('cuts_sections') }}">Sections</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Recetas</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('recipes') }}">Recipes</a></li>
                        <li><a href="{{ route('recipes_sections') }}">Sections</a></li>
                    </ul>
                </li>
                <!-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Recipes Details</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('recipes_details_sections') }}">Sections</a></li>
                    </ul>
                </li> -->
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Sobre Nosotros</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('about_sections') }}">Sections</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Forms</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('dropdown') }}">Dropdown</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Pie de Pagina </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('footer_sections') }}">Footer</a></li>
                    </ul>
                </li>
                


                <li class="nav-small-cap">---Inquiry  Management </li>
                <li> <a class=" waves-effect waves-dark" href="{{ route('inquiries_master') }}"><span>Inquiries</span></a></li>
                <li> <a class=" waves-effect waves-dark" href="{{ route('LogOut') }}"><span><i class="fa fa-power-off"></i>Logout</span></a></li>
                
                
       
              
                <!-- <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li> -->
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>