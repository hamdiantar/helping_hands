<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{asset('assets/js/material-dashboard.min.js?v=3.0.4')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
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
    function replay(formId, type) {
        event.preventDefault();
        Swal.fire({
            title: 'Reply To This Compliant',
            input: 'textarea',
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'replay',
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                alert('replied successfully')
            }
        })
    }
</script>
<x:notify-messages />
@notifyJs
@stack('js')
