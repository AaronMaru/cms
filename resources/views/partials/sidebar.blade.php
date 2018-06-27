<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li>
            <p class="sidebar-label">General</p>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <p class="sidebar-label">
                Administator
            </p>
        </li>
        <li>
            <a href="{{ route('users.index') }}">Manage User</a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Roles &amp; Permissions</a>
            <ul class="collapse list-unstyled show" id="pageSubmenu">
                <li>
                    <a href="{{ route('roles.index') }}">Roles</a>
                </li>
                <li>
                    <a href="{{ route('permissions.index') }}">Permissions</a>
                </li>
            </ul>
        </li>
    </ul>
</div>