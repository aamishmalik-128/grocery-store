<div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{route('admin_dashboard')}}">Admin Panel</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="{{route('admin_dashboard')}}"></a>
            </div>

            <ul class="sidebar-menu">

                <li class="{{(Request::is('admin/dashboard')?'active' : '')}}"><a class="nav-link" href="{{route('admin_dashboard')}}"><i class="fas fa-chart-pie"></i>
                        <span>Dashboard</span></a></li>
                <li class="{{(Request::is('admin/admin_profile')?'active' : '')}}"><a class="nav-link" href="{{route('admin_profile')}}"><i class="fas fa-user-edit"></i>
                        <span>Edit Profile</span></a></li>
                <li class="{{(Request::is('admin/user/index')?'active' : '')}}"><a class="nav-link" href="{{route('admin_user_index')}}"><i class="fas fa-users"></i>
                        <span>Manage Users</span></a></li>

                <li class="nav-item dropdown {{(Request::is('admin/product-category/*')?'active':'')}}">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder"></i><span>Manage Products
                        </span></a>
                    <ul class="dropdown-menu">
                        <li class="{{(Request::is('admin/product-category/*')?'active':'')}}"><a class="nav-link" href="{{route('admin_product_category_index')}}"><i class="fas fa-angle-right"></i>Categories </a>
                        </li>
                        <li class="{{(Request::is('admin/product/*')?'active':'')}}"><a class="nav-link" href="{{route('admin_product_index')}}"><i class="fas fa-angle-right"></i> Product</a>
                        </li>
                    </ul>
                </li>
                <li><a class="nav-link" href="{{route('admin_logout')}}"><i class="fas fa-sign-out-alt"></i>
                        <span>Log Out</span></a></li>
                {{-- <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i>
                        <span>Setting</span></a></li>

                <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i>
                        <span>Form</span></a></li>

                <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i>
                        <span>Table</span></a></li>

                <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i>
                        <span>Invoice</span></a></li>

            </ul> --}}
        </aside>
    </div>
