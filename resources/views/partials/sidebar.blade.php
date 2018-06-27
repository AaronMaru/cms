<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li>
            <p class="sidebar-label">General</p>
        </li>
        <li>
            <a href="{{ route('manage.dashboard') }}" class="{{ Nav::isRoute('manage.dashboard') }}">Dashboard</a>
        </li>
        <li>
            <p class="sidebar-label">
                Administator
            </p>
        </li>
        <li>
            <a href="{{ route('users.index') }}" class="{{ Nav::isResource('users') }}">Manage User</a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle {{ Nav::hasSegment(['roles', 'permissions'], 2) }}">Roles &amp; Permissions</a>
            <ul class="collapse list-unstyled show" id="pageSubmenu">
                <li>
                    <a href="{{ route('roles.index') }}" class="{{ Nav::isResource('roles') }}">Roles</a>
                </li>
                <li>
                    <a href="{{ route('permissions.index') }}" class="{{ Nav::isResource('permissions') }}">Permissions</a>
                </li>
            </ul>
        </li>
    </ul>
</div>