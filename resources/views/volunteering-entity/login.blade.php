<!DOCTYPE html>
<html lang="en">

<head>
    @include('volunteering-entity.layouts.head')
</head>

<body class="bg-gray-200">
@include('website.messages')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url({{asset('assets/img/bg.png')}});">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-warning shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Welcome To Helping
                                    Hands</h4>

                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" class="text-start" method="post" action="{{route('volunteering-entity.login')}}">
                                @csrf
                                <div class="input-group input-group-outline my-3" style="width: 100% !important;">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="VOL_ENTITY_EMAIL">
                                </div>
                                <div class="input-group input-group-outline mb-3" style="width: 100% !important;">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-check form-switch d-flex align-items-center mb-3">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-warning w-100 my-4 mb-2">Sign in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('admin.layouts.foot')
</body>

</html>
