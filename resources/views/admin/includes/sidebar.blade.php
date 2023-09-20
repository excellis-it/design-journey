<div class="main-sidebar sidebar-style-2" tabindex="1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"><span class="logo-name"><img
                        src="{{ asset('frontend_assets/assets/images/logo.png') }}" /></span> </a>
            <a href="index.html"><span class="logo-fm"><img
                        src="{{ asset('frontend_assets/assets/images/logo.png') }}" /></span> </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header"></li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="ph-gauge"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="dropdown {{ Request::is('admin/categories*') ? 'active' : ' ' }}">
                <a href="{{ route('categories.index') }}">
                    <i class="ph-clipboard-text"></i>
                    <span>Categories</span>
                </a>
            </li>

            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>B2B Deposits</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">Manage / Add Deposits</a></li>
                    <li><a class="nav-link" href="">Manage New Deposits
                            Request</a></li>
                    <li><a class="nav-link" href="">Approved Deposits Request</a>
                    </li>
                    <li><a class="nav-link" href="">Deposit History</a></li>
                    <li><a class="nav-link" href="">Refund Deposit</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-ticket"></i>
                    <span>All Cancel Ticket</span>
                </a>
            </li>


        </ul>
    </aside>
</div>
