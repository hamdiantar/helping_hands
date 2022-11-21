<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>

        <a class="navbar-brand m-0" href="#" target="_blank">
{{--            <img src="{{asset('assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">--}}
            <span class="ms-1 font-weight-bold text-white">Helping Hands</span>
        </a>
    </div>

    <hr class="horizontal light mt-0 mb-2">
    <div style="height: auto !important;" class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('admin/profile')}}" href="{{route('admin.profile')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Welcome Admin</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('admin')}}" href="{{route('admin.')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('admin/volunteers*')}}" href="{{route('admin.volunteers.index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Volunteers</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('admin/volunteering-entity*')}}" href="{{route('admin.volunteering-entity.index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">home</i>
                    </div>
                    <span class="nav-link-text ms-1">volunteering Entity</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('admin/compliant*')}}" href="{{route('admin.compliant.index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">warning</i>
                    </div>
                    <span class="nav-link-text ms-1">Compliant <span class="badge bg-danger">8</span></span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('admin/packages*')}}" href="{{route('admin.packages.index')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <span class="material-icons opacity-10">book</span>
                    </div>
                    <span class="nav-link-text ms-1">Packages</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('admin/growth_report*')}}" href="{{route('admin.growth_report')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Growth Report</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{isCurrentPage('admin/trend_report*')}}" href="{{route('admin.trend_report')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Overall satisfaction</span>
                </a>
            </li>

{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white " href="../pages/billing.html">--}}
{{--                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--                        <i class="material-icons opacity-10">receipt_long</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Billing</span>--}}
{{--                </a>--}}
{{--            </li>--}}


{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white " href="../pages/notifications.html">--}}
{{--                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--                        <i class="material-icons opacity-10">notifications</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Notifications</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item mt-3">--}}
{{--                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>--}}
{{--            </li>--}}

{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white " href="../pages/profile.html">--}}
{{--                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--                        <i class="material-icons opacity-10">person</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Profile</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white " href="../pages/sign-in.html">--}}
{{--                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--                        <i class="material-icons opacity-10">login</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Sign In</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white " href="../pages/sign-up.html">--}}
{{--                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--                        <i class="material-icons opacity-10">assignment</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Sign Up</span>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
    </div>

</aside>
