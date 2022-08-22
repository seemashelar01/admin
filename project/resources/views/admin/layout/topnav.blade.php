<header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <a class="navbar-brand" href="#">
                    <b class="logo-icon">
                        <!-- Dark Logo icon -->
                        <img src="{{ asset('assets/theme/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="{{ asset('assets/theme/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                    </b>
                    <span class="logo-text">
                        <!--
            <img src="{{ asset('assets/theme/images/logo-text.png') }}" alt="homepage" class="dark-logo" />dark Logo text -->
                        <span class="text-light"> Secret Weapon </span>
                        <!-- Light Logo text
            <img src="{{ asset('assets/theme/images/logo-light-text.png') }}" class="light-logo" alt="homepage" /> -->
                    </span>
                </a>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    <li class="nav-item dropdown">
                    </li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">

                    </li>
                    <li class="nav-item dropdown">

                    </li>
                    <li class="nav-item">
                        <a type="button" href="javascript:void" class="nav-link" id="change-theme" title="Change Theme">
                            <input type="checkbox" class="d-none" name="theme-view" id="theme-view">
                            <i class="fas fa-moon" id="theme-tag"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/avatar.png')}}" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <span class="with-arrow"><span class="bg-primary"></span></span>
                            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                <div class=""><img src="{{asset('assets/images/avatar.png')}}" alt="user" class="img-circle" width="60"></div>
                                <div class="ml-2">
                                        <h4 class="m-b-0">Admin</h4>
                                        <p class=" m-b-0">Admin@gmail.com</p>
                                   
                                </div>
                            </div>
                            <a class="dropdown-item" href="#"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="px-2"><a href="#" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>