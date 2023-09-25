<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{  request()->is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

@guest
    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
@else

    <li class="nav-item    has-treeview  {{ request()->is('users*') || request()->is('roles*') || request()->is('profile*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link  ">
            <i class="nav-icon text-red fas fa fa-user"></i>
            <p>User Management Module</p>
        </a>
        @can('user-management')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('users.index') }}"
                       class="nav-link {{  request()->is('users') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-red"></i>
                        <p>Users </p>
                    </a>
                </li>
            </ul>
        @endcan
        @can('role-management')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('roles.index') }}"
                       class="nav-link {{  request()->is('roles*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-red"></i>
                        <p>User Roles </p>
                    </a>
                </li>
            </ul>
        @endcan
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('profile') }}"
                   class="nav-link {{  request()->is('profile*') ? 'active' : '' }}  ">
                    <i
                        class="far fa-circle nav-icon text-red"></i>
                    <p>Change Password </p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item    has-treeview  {{ request()->is('settings*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link  ">
            <i class="nav-icon text-yellow fas fa fa-database"></i>
            <p>Master Data Module</p>
        </a>

        @can('workshop-type-management')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('workshopType.index') }}"
                       class="nav-link {{  request()->is('settings/workshopType*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Workshop Type </p>
                    </a>
                </li>
            </ul>
        @endcan

        @can('regiment-management')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('regiment.index') }}"
                       class="nav-link {{  request()->is('settings/regiment*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Regiment </p>
                    </a>
                </li>
            </ul>
        @endcan

        @can('unit-management')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('unit.index') }}"
                       class="nav-link {{  request()->is('settings/unit*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Unit </p>
                    </a>
                </li>
            </ul>
        @endcan
    </li>
@endguest
