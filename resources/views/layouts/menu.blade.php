<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{  request()->is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>


    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>



        <li class="nav-item    has-treeview  {{ request()->is('workshop*')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  ">
                <i class="nav-icon text-blue fas fa fa-warehouse"></i>
                <p>Workshop Management</p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('workshop.create') }}"
                       class="nav-link {{  request()->is('workshop/create') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-blue"></i>
                        <p>Add Workshop </p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('workshop.index') }}"
                       class="nav-link {{  request()->is('workshop') ? 'active' : '' }}  ">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Workshops </p>
                    </a>
                </li>
            </ul>

        </li>

        <li class="nav-item    has-treeview  {{ request()->is('repair*')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  ">
                <i class="nav-icon text-green fas fa fa-wrench"></i>
                <p>Repair Management</p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('g7.index') }}"
                       class="nav-link {{  request()->is('g7') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-green"></i>
                        <p>Workshop Indent(G7) </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('jobCard.index') }}"
                       class="nav-link {{  request()->is('jobCard') ? 'active' : '' }}  ">
                        <i class="far fa-circle nav-icon text-green"></i>
                        <p>Job Card(G26)</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('technicalDetail.index') }}"
                       class="nav-link {{  request()->is('technicalDetail') ? 'active' : '' }}  ">
                        <i class="far fa-circle nav-icon text-green"></i>
                        <p>Technical Details</p>
                    </a>
                </li>
            </ul>            
            
            
   

        <li class="nav-item    has-treeview  {{ request()->is('service*')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  ">
                <i class="nav-icon text-orange fas fa fa-bus"></i>
                <p>Service Management</p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('service.index') }}"
                       class="nav-link {{  request()->is('service') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-orange"></i>
                        <p>Vehicle Services</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item    has-treeview  {{ request()->is('modification*')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  ">
                <i class="nav-icon text-purple fas fa fa-space-shuttle"></i>
                <p>Modification Management</p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('g7.index') }}"
                       class="nav-link {{  request()->is('g7') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-purple"></i>
                        <p>Vehicle Modification</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item    has-treeview  {{ request()->is('inventry*')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  ">
                <i class="nav-icon text-green fas fa fa-car"></i>
                <p>Inventry Management</p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('sparePart.index') }}"
                       class="nav-link {{  request()->is('sparePart') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Spare Parts Details</p>
                    </a>
                </li>
            </ul>
        </li>

    <li class="nav-item    has-treeview  {{ request()->is('users*') || request()->is('roles*') || request()->is('profile*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link  ">
            <i class="nav-icon text-red fas fa fa-user"></i>
            <p>User Management</p>
        </a>

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
            <p>Master Data</p>
        </a>

        
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('workshopType.index') }}"
                       class="nav-link {{  request()->is('settings/workshopType*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Workshop Type</p>
                    </a>
                </li>
            </ul>
        
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('slemeBattalion.index') }}"
                       class="nav-link {{  request()->is('settings/slemeBattalion*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>SLEME Battalion </p>
                    </a>
                </li>
            </ul>
        
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('jobType.index') }}"
                       class="nav-link {{  request()->is('settings/jobType*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Job Type </p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('repairType.index') }}"
                       class="nav-link {{  request()->is('settings/repairType*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Repair Type </p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('natureOfRepair.index') }}"
                       class="nav-link {{  request()->is('settings/natureOfRepair*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Nature Of Repair </p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('vehicleMcategory.index') }}"
                       class="nav-link {{  request()->is('settings/vehicleMcategory*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Vehicle Parts Main Category</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('vehicleScategory.index') }}"
                       class="nav-link {{  request()->is('settings/vehicleScategory*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Vehicle Parts Sub Category</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('vehicleTcategory.index') }}"
                       class="nav-link {{  request()->is('settings/vehicleTcategory*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Vehicle Parts Third Category</p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('supplierDetail.index') }}"
                       class="nav-link {{  request()->is('settings/supplierDetail*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Supplier Detail </p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('serviceCheckList.index') }}"
                       class="nav-link {{  request()->is('settings/serviceCheckList*') ? 'active' : '' }}  ">
                        <i
                            class="far fa-circle nav-icon text-yellow"></i>
                        <p>Service Check List </p>
                    </a>
                </li>
            </ul>

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
        
    </li>

