<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="main-menu">
                    @if(Auth::check() && Auth::user()->hasRole('ADMIN'))
                    <a href="#">Admin Dashboard</a>
                    @else
                    <a href="#">Manager Dashboard</a>
                    @endif
                </li>

            
            </ul> 
        </div>
    </div>
</div>


