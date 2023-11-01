<div class="main-sidebar sidebar-style-2" tabindex="1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"><span class="logo-name"><img
                        src="{{ asset('frontend_assets/assets/images/logo.png') }}" /></span> </a>
            <a href="{{ route('admin.dashboard') }}"><span class="logo-fm"><img
                        src="{{ asset('frontend_assets/assets/images/logo.png') }}" /></span> </a>
        </div>
        <ul class="sidebar-menu ">
            <li class="menu-header"></li>
            <li class="dropdown {{ Request::is('admin/dashboard*') ? 'active' : ' ' }}">
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

            <li class="{{ Request::is('admin/users*') ? 'active' : ' ' }}">
                <a href="{{ route('users.index') }}">
                    <i class="ph-users"></i>
                    <span>Customers</span>
                </a>
            </li>



            <li class="dropdown {{ Request::is('admin/types*') || Request::is('admin/subtypes*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-pen"></i>
                    <span>Types</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/types*') ? 'active' : ' ' }}">
                        <a class="nav-link" href="{{ route('types.index') }}">Manage</a>
                    </li>
                    <li class="{{ Request::is('admin/subtypes*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('type.subtypes.list') }}">Subtype</a>
                    </li>
                </ul>
            </li>
            {{-- <li class="{{ Request::is('admin/solution*') ? 'active' : ' ' }}">
                <a href="{{ route('solution.design.edit') }}">
                    <i class="ph-clipboard-text"></i>
                    <span>Solution</span>
                </a>
            </li> --}}

            <li class="{{ Request::is('admin/requests*') ? 'active' : ' ' }}">
                <a href="{{ route('requests.list') }}">
                    <i class="ph-book"></i>
                    <span>Requests</span>
                </a>
            </li>

            <li class="dropdown {{ Request::is('admin/cms*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-image"></i>
                    <span>CMS</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/home-cms*') ? 'mm-active' : '' }}">
                        <a class="nav-link" href="{{ route('home.cms') }}">Home Cms</a>
                    </li>
                    <li class="{{ Request::is('admin/about-cms*') ? 'mm-active' : '' }}">
                        <a class="nav-link" href="{{ route('about.cms') }}">About Cms</a>
                    </li>
                    {{-- <li class="{{ Request::is('admin/cms*') ? 'mm-active' : '' }}">
                        <a class="nav-link" href="{{ route('solution.cms') }}">Solution Cms</a>
                    </li> --}}
                </ul>
            </li>

            <li class="dropdown {{ Request::is('admin/blogs*') || Request::is('admin/blog-categories*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>Blog</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/blog-categories*') ? 'mm-active' : '' }}">
                        <a class="nav-link" href="{{ route('blogs.categories.list') }}">Category</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('blogs.index') }}">Manage</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('admin/contact-us*') ? 'active' : ' ' }}">
                <a href="{{ route('contact.us.list') }}">
                    <i class="ph-clipboard-text"></i>
                    <span>Contact Us</span>
                </a>
            </li>

            <li class="dropdown {{ Request::is('admin/faq*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>Faq</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('faqs.index') }}">Manage</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ Request::is('admin/help-centers*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>Help Center</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('help-centers.index') }}">Manage</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ Request::is('admin/case-studies*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>Case Studies</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('case-studies.index') }}">Manage</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ Request::is('admin/guides*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>Guide</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('guides.index') }}">Manage</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ Request::is('admin/careers*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>Career</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('careers.index') }}">Manage</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ Request::is('admin/screenshot*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>Screen Shot</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('screenshot.index') }}">Manage</a>
                    </li>
                    {{-- <li class="">
                        <a class="nav-link" href="{{ route('screenshot.create') }}">Create</a>
                    </li> --}}
                </ul>
            </li>

            <li class="{{ Request::is('admin/job-apply*') ? 'active' : ' ' }}">
                <a href="{{ route('job-apply.list') }}" class="menu-toggle nav-link ">
                    <i class="ph-wallet"></i>
                    <span>Job Application</span>
                </a>
                
            </li>

            <li class="{{ Request::is('admin/testimonial*') ? 'active' : ' ' }}">
                <a href="{{ route('testimonial.index') }}" class="menu-toggle nav-link ">
                    <i class="ph-wallet"></i>
                    <span>Testimonial</span>
                </a>   
            </li>

            <li class="{{ Request::is('admin/our-teams*') ? 'active' : ' ' }}">
                <a href="{{ route('our-teams.index') }}" class="menu-toggle nav-link ">
                    <i class="ph-wallet"></i>
                    <span>Our Teams</span>
                </a>
                
            </li>
     
            <li class="dropdown {{ Request::is('admin/free-illustrations*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>Free illustration</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('free-illustrations.index') }}">Category</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('free-illustrations.images.list') }}">Image</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ Request::is('admin/icons*') ? 'active' : ' ' }}">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>Free Icon</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('icons.index') }}">Category</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('icons.images.list') }}">Image</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
