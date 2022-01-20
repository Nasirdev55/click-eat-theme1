<script src="{{ asset('bootstrap5/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor-admin-assets/js/style.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor-admin-assets/plugins/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor-admin-assets/plugins/DataTables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendor-admin-assets/plugins/DataTables/responsive.bootstrap4.min.js') }}"></script>
<script>
$(document).ready(function(){
    $('#data-table').DataTable({
        responsive: true
    });
})
</script>