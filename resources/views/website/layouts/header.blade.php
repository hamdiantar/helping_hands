<header id="myHeader" class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/')}}" class="logo">
                          <img height="109px" src="{{asset('website/logo.png')}}" alt="Chain App Dev">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="{{route('vol_entity.list')}}">Volunteering</a></li>
                        <li class="scroll-to-section"><a href="{{route('vol_entity.pricing')}}">Pricing</a></li>
                        <li class="scroll-to-section"><a href="{{route('compliant')}}">Compliant</a></li>
                        <li class="scroll-to-section"><a href="{{route('verification')}}">verification</a></li>
{{--                        <li class="scroll-to-section"><a href="#newsletter">profile</a></li>--}}
                        <li><div class="gradient-button"><a id="modal_trigger2" href="#modal2"><i class="fa fa-sign-in-alt"></i>Join Us</a></div></li>
                        <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i>Login</a></div></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>


<div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">

        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" class="form-control"/>
                <br />
                <label>Password</label>
                <input type="password" />
                <br />
                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>
                <div class="action_btns">
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

<div id="modal2" class="popupContainer" style="display:none;width: 510px !important;">
    <div class="popupHeader">
        <span class="header_title">Join Us As : </span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="action_btns">
                <div class="one_half"><a href="{{route('vol.register')}}"  class="btn">Volunteer <i class="fa fa-user-plus"></i></a></div>
                <div class="one_half last"><a href="{{route('vol_entity.register')}}" class="btn">Volunteering Entity <i class="fa fa-home"></i></a></div>
            </div>
        </div>
    </section>
</div>
