<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
            <a href="{{route('root')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('root')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">--}}
{{--                        <i class="ri-dashboard-2-line"></i> <span>@lang('translation.dashboards')</span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse menu-dropdown" id="sidebarDashboards">--}}
{{--                        <ul class="nav nav-sm flex-column">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="dashboard-analytics" class="nav-link">@lang('translation.analytics')</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li> <!-- end Dashboard Menu -->--}}

{{--                <li class="menu-title"><span>@lang('translation.menu')</span></li>--}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('root')}}">
                        <i class="ri-dashboard-line"></i> <span>@lang('translation.dashboards')</span>
                    </a>
                </li>
                <li class="menu-title"><span>Settings</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('permission.index')}}">
                        <i class="ri-dashboard-line"></i> <span>Permission</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('roles.index')}}">
                        <i class="ri-dashboard-line"></i> <span>Role</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('usermanagements.index')}}">
                        <i class="ri-user-2-fill"></i> <span>Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Message templates</span>
                    </a>
                    <div class="menu-dropdown collapse" id="sidebarPages" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('email.templates')}}" class="nav-link" data-key="t-email">Email</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('sms.templates')}}" class="nav-link" data-key="t-sms">SMS</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('whatsapp.templates')}}" class="nav-link" data-key="t-whatsappp">WhatsApp</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
