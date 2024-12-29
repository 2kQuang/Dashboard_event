<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a></li>
                        <li class="{{ request()->routeIs('admin.account.*') ? 'active' : '' }}"><a href="{{ route('admin.account.index') }}"><i class="icon mdi mdi-face"></i><span>Management account</span></a></li>
                        <li class="{{ request()->routeIs('admin.role.*') ? 'active' : '' }}"><a href="{{ route('admin.role.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Management role</span></a></li>
                        <li class="{{ request()->routeIs('admin.event.*') ? 'active' : '' }}"><a href="{{ route('admin.event.index') }}"><i class="icon mdi mdi-layers"></i><span>Management event</span></a></li>
                        <li class="{{ request()->routeIs('admin.category.*') ? 'active' : '' }}"><a href="{{ route('admin.category.index') }}"><i class="icon mdi mdi-inbox"></i><span>Management category</span></a></li>
                        <li class="{{ request()->routeIs('admin.unit.*') ? 'active' : '' }}"><a href="{{ route('admin.unit.index') }}"><i class="icon mdi mdi-view-web"></i><span>Management unit</span></a></li>
                        <li class="{{ request()->routeIs('admin.facutly.*') ? 'active' : '' }}"><a href="{{ route('admin.facutly.index') }}"><i class="icon mdi mdi-pin"></i><span>Management facutly</span></a></li>
                        <li class="{{ request()->routeIs('admin.class.*') ? 'active' : '' }}"><a href="{{ route('admin.class.index') }}"><i class="icon mdi mdi-book"></i><span>Management class</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
