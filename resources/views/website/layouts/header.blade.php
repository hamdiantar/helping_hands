@include('website.messages')
<header id="myHeader" class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="{{url('/')}}" class="logo">
                          <img height="109px" src="{{asset('website/logo.png')}}" alt="Chain App Dev">
                    </a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{url('/')}}" class="{{isCurrentPage('/')}}">Home</a></li>
                        <li class="scroll-to-section"><a class="{{isCurrentPage('vol_entity/list*')}}" href="{{route('vol_entity.list')}}">Volunteer With Us</a></li>
                        @auth('volunteer')
                        <li><div class="gradient-button"><a href="{{route('volunteer.profile')}}">Welcome {{getAuthVolunteer()->VOL_FNAME}}   <i class="fa fa-user"></i></a>
                            </div></li>
                            <li><div class="gradient-button"><a onclick="confirmAction('logoutForm', 'logout')" href="#">logout  <i class="fa fa-sign-out-alt"></i></a></div></li>
                            <form method="post" action="{{route('volunteer.signOut')}}" id="logoutForm">@csrf</form>
                        @endauth
                        @guest('volunteer')
                            <li class="scroll-to-section"><a class="{{isCurrentPage('vol_entity/pricing*')}}" href="{{route('vol_entity.pricing')}}">Pricing</a></li>
                            <li class="scroll-to-section"><a class="{{isCurrentPage('verification*')}}" href="{{route('verification')}}">verification</a></li>
                            <li><div class="gradient-button"><a id="modal_trigger2" href="#modal2">Join Us  <i class="fa fa-sign-in-alt"></i></a></div></li>
                        <li><div class="gradient-button"><a id="modal_trigger" href="#modal">Login  <i class="fa fa-sign-in-alt"></i></a></div></li>
                        @endguest
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
        <span class="header_title">Login As : </span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>
    <section class="popupBody">
        <div class="social_login">
            <div class="action_btns">
                <div class="one_half"><a id="modal_trigger3" href="#modal3"  class="btn">Volunteer <i class="fa fa-sign-in-alt"></i></a></div>
                <div class="one_half last"><a href="{{route('volunteering-entity.showLoginForm')}}" class="btn">Volunteering Entity <i class="fa fa-sign-in-alt"></i></a></div>
            </div>
        </div>
    </section>
</div>

<div id="modal3" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">

        <div class="user_login">
            <form method="post" action="{{route('volunteer.login')}}" id="loginForm">
                @csrf
                <label>E-Mail</label>
                <input name="VOL_EMAIL" type="text" class="form-control"/>
                <br />
                <label>Password</label>
                <input name="password" type="password" />
                <br />
                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>
                <div class="action_btns">
                    <div class="one_half last"><button type="submit" form="loginForm"  class="btn">Login</button></div>
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
                <div class="one_half"><a href="{{route('volunteer.register')}}"  class="btn">Volunteer <i class="fa fa-user-plus"></i></a></div>
                <div class="one_half last"><a href="{{route('vol_entity.register')}}" class="btn">Volunteering Entity <i class="fa fa-home"></i></a></div>
            </div>
        </div>
    </section>
</div>
