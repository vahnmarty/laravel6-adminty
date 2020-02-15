<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Basic</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="{{ Request::is('admin/dashboard*') ? 'active' : ''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-dashboard"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>

            <li class="pcoded-hasmenu {{ Request::is('admin/auth/user*' , 'admin/auth/role*') ? 'active' : ''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                    <span class="pcoded-mtext">Access</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ Request::is('admin/auth/user*') ? 'active' : ''}}">
                        <a href="{{ route('admin.auth.user.index') }}">
                            <span class="pcoded-mtext">User Management</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/auth/role*') ? 'active' : ''}}">
                        <a href="{{ route('admin.auth.role.index') }}">
                            <span class="pcoded-mtext">Role Management</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>