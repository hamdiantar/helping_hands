
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>

<body class="g-sidenav-show  bg-gray-200">
@include('admin.layouts.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav style="box-shadow: 0px -2px 9px 2px #b7b2b27a !important;" class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ul>
                    @yield('breadcrumb')
                </ul>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="dateTime">
                        <p id="time" class="time"></p>
                        <p id="date" class="date"></p>
                    </div>
                    <div class="input-group input-group-outline" style="width: 100% !important;">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a style="cursor: pointer" onclick="confirmAction('logoutForm', 'logout ?')" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-sign-out me-sm-1"></i>
                            <span class="d-sm-inline d-none">Logout</span>
                        </a>
                        <form style="display: none" method="post" action="{{route('admin.signOut')}}" id="logoutForm">@csrf</form>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        @yield('content')
    </div>
</main>

@include('admin.layouts.foot')
</body>
</html>
