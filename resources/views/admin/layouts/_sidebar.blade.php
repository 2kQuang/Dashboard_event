<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a></li>
                        {{-- <li class="parent"><a href=""><i class="icon mdi mdi-folder"></i><span>Management account</span></a>
                            <ul class="sub-menu">
                                <li class="parent"><a href="{{ route('admin.account') }}"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a></li>
                                        <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a></li>
                                                <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="{{ request()->routeIs('admin.account.*') ? 'active' : '' }}"><a href="{{ route('admin.account.index') }}"><span>Management account</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>