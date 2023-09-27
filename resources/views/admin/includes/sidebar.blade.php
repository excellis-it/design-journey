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
            <li class="dropdown">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="ph-gauge"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/categories*') ? 'active' : ' ' }}">
                <a href="{{ route('categories.index') }}">
                    <i class="ph-clipboard-text"></i>
                    <span>Categories</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/plans*') ? 'active' : ' ' }}">
                <a href="{{ route('plans.index') }}">
                    <i class="ph-clipboard-text"></i>
                    <span>Plans</span>
                </a>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>CMS</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/cms*') ? 'mm-active' : '' }}">
                        <a class="nav-link" href="{{ route('home.cms') }}">Home Cms</a>
                    </li>
                    <li class="{{ Request::is('admin/cms*') ? 'mm-active' : '' }}">
                        <a class="nav-link" href="{{ route('about.cms') }}">About Cms</a>
                    </li>
                </ul>
            </li>
            
            <li class="{{ Request::is('admin/blogs*') ? 'active' : ' ' }}">
                <a href="{{ route('blogs.index') }}">
                    <i class="ph-ticket"></i>
                    <span>Blog</span>
                </a>
            </li>


        </ul>
    </aside>
</div>
