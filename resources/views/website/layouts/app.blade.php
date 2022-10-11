
<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.layouts.head')
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
@include('website.layouts.header')
<!-- ***** Header Area End ***** -->




@yield('content')



<footer id="newsletter">
    @include('website.layouts.footer')
</footer>


@include('website.layouts.foot')
</body>
</html>
