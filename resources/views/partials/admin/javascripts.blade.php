<script src="{{asset('admin/quickadmin/js/jquery-1.11.3.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/jquery.dataTables-1.10.9.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/dataTables.buttons-1.2.4.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/buttons.flash-1.2.4.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/jszip-2.5.0.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/pdfmake-0.1.18.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/vfs_fonts-0.1.18.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/buttons.html5-1.2.4.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/buttons.print-1.2.4.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/buttons.colVis-1.2.4.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/dataTables.select-1.2.0.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/jquery-ui-1.11.3.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/bootstrap.min.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/select2.full.min.js') }}"></script>
<script src="{{asset('admin/js/secure-trading-st.js') }}"></script>
<script src="{{asset('admin/quickadmin/js/main.js') }}"></script>

<script src="{{asset('admin/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{asset('admin/adminlte/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{asset('admin/adminlte/js/app.min.js') }}"></script>
<!--<script src="https://webservices.securetrading.net/js/st.js"></script> -->
<script>
    window._token = '{{ csrf_token() }}';
</script>



@yield('javascript')