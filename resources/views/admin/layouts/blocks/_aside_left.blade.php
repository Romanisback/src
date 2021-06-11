<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="{{ request()->route()->getName() === 'admin.dashboard' ? 'nav-active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="{{ Str::contains(request()->route()->getName(), 'admin.users') ? 'nav-active' : '' }}">
                        <a href="{{ route('admin.users.list') }}">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    <li class="{{ Str::contains(request()->route()->getName(), 'admin.cases') ? 'nav-active' : '' }}">
                        <a href="{{ route('admin.cases.list') }}">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Cases</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <hr class="separator">
        </div>

    </div>

</aside>
