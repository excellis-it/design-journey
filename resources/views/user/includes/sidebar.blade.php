<div class="main-sidebar sidebar-style-2" tabindex="1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}"><span class="logo-name"><img src="{{ asset('user_assets/img/logo.png')}}" /></span> </a>
            
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header"></li>
            <li class="dropdown">
                <a href="{{ route('order.create') }}" class="creat_request_btn">
                    <i class="ph ph-plus-circle"></i>
                    <span>Create Request</span>
                </a>
            </li>
            <li class="dropdown {{ (request()->is('user/request*')) ? 'active' : '' }}">
                <a href="{{ route('request.list') }}">
                    <i class="ph ph-list"></i>
                    <span>Requests</span>
                </a>
            </li>

            <li class="dropdown {{ (request()->is('user/brand-profile*')) ? 'active' : '' }}">
                <a href="{{ route('brand-profile.index') }}">
                    <i class="ph ph-stack"></i>
                    <span>Brand profiles</span>
                </a>
            </li>

            <li class="dropdown {{ (request()->is('user/my-plan*')) ? 'active' : '' }}">
                <a href="{{ route('my-plan.list') }}">
                    <i class="ph ph-bookmarks"></i>
                    <span>My Plan</span>
                </a>
            </li>
           
            <li class="dropdown">
                <a href="">
                    <i class="ph ph-users"></i>
                    <span>Refer a friend</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph ph-question"></i>
                    <span>Help center</span>
                </a>
            </li>
        </ul>
    </aside>
</div>