<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="main-menu">
                    
                    <a href="#">Admin Dashboard</a>
                    
                </li>

                <li class="submenu">
                    <a href="#" class="{{ Request::is('admin/cms*') ? 'active' : ' ' }}"><i class="la la-list"></i> <span>Cms</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="{{ Request::is('admin/cms/home*') ? 'active' : ' ' }}">
                            <a href="{{ route('home.cms') }}">Home Cms</a>
                        </li>   
                        <li class="{{ Request::is('admin/cms/about*') ? 'active' : ' ' }}">
                            <a href="{{ route('about.cms') }}">About Cms</a>
                        </li>        
                    </ul>
                </li>
                <li class="{{ Request::is('admin/categories*') ? 'active' : ' ' }}">
                    <a href="{{ route('categories.index') }}" ><i class="la la-box"></i> <span>Categories</span></a>                 
                </li>
                
            </ul> 
        </div>
    </div>
</div>


