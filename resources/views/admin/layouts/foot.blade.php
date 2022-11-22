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
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable({
            dom: 'Bfrtip',
            buttons: ['print']
        });
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
</script>
<x:notify-messages />
@notifyJs
@stack('js')
