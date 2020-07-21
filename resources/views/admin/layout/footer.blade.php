<!-- <script src="{{asset('')}}admin/js/ajax.js"></script> -->
<script src="assets/admin/js/toastr.min.js"></script>
@if(session('thongbao'))
    <script type="text/javascript">
        toastr.success('{{ session('thongbao') }}', 'Thông báo', {timeOut: 5000});
    </script>
@endif
@if(session('error'))
    <script type="text/javascript">
        toastr.error('{{ session('error') }}', 'Thông báo', {timeOut: 5000});
    </script>
@endif