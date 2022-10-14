<!-- Scripts -->
<script src="{{asset('website/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('website/assets/js/animation.js')}}"></script>
<script src="{{asset('website/assets/js/imagesloaded.js')}}"></script>
<script src="{{asset('website/assets/js/popup.js')}}"></script>
<script src="{{asset('website/assets/js/custom.js')}}"></script>
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
@stack('js')
