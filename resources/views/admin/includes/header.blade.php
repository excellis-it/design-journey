<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('frontend_assets/img/invoice_logo2.png') }}" alt=""/></a></div>
            
        </div>
        <!--<a id="toggle_btn" href="javascript:void(0);">-->
        <!--    <span class="bar-icon">-->
        <!--        <span></span>-->
        <!--        <span></span>-->
        <!--        <span></span>-->
        <!--    </span>-->
        <!--</a>-->

        <div class="page-title-box">
             @if(Auth::check() && Auth::user()->hasRole('ADMIN'))
            <h3>Welcome to admin panel</h3>
            @else
            <h3>Welcome to manager panel</h3>
            @endif
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
        <ul class="nav user-menu">

            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                        
                        <img src="{{ asset("admin_assets/images/icon.png") }}" alt="">
                        <span class="status online"></span></span>
                    <span>{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('admin.profile') }}">My Profile</a>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
                </div>
            </li>
        </ul>

        <div class="dropdown mobile-user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('admin.profile') }}">My Profile</a>
                <a class="dropdown-item" href="{{ route('user.list') }}">Manage Users </a>
                <a class="dropdown-item" href="{{ route('managers.index') }}">Manage Managers </a>
                <a class="dropdown-item" href="{{ route('home.cms') }}">Home Cms</a>
                <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
            </div>
        </div>
    </div>
