<!-- Scripts -->
<script src="{{asset('website/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('website/assets/js/animation.js')}}"></script>
<script src="{{asset('website/assets/js/imagesloaded.js')}}"></script>
<script src="{{asset('website/assets/js/popup.js')}}"></script>
<script src="{{asset('website/assets/js/custom.js')}}"></script>
<script src="{{asset('vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    function confirmAction(formId, type) {
        event.preventDefault();
        Swal.fire({
            // text: "You won't be able to revert this!",

            text: 'Are you sure want to '+ type,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'OK',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(formId).submit();
            }
        })
    }
    $('.select2').select2();
    @if(session('success'))
    Swal.fire({
        text: '{{session('success')}}',
        icon: 'success',
        confirmButtonText: 'OK',
    })
    @endif
    @if(session('error'))
    Swal.fire({
        text: '{{session('error')}}',
        icon: 'error',
        confirmButtonText: 'OK',
    })
    @endif
    @if(session('errorLogin'))
    Swal.fire({
        text: '{{session('errorLogin')}}',
        icon: 'error',
        confirmButtonText: 'OK',
    })
    @endif
    @if(session('not_auth'))
    Swal.fire({
        text: '{{session('not_auth')}}',
        icon: 'error',
        confirmButtonText: 'OK',
    })
    @endif
</script>
@stack('js')
