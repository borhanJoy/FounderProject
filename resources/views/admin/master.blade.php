<!DOCTYPE HTML>
<html>

<head>
    <title>Admin Dashboard</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}backend/admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/admin/assets/css/core.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/admin/assets/css/toastr.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/admin/assets/css/components.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/admin/assets/icons/fontawesome/styles.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/admin/lib/css/chartist.min.css">
    <script type="text/javascript" src="{{ asset('/') }}backend/admin/assets/js/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    @yield('style')

</head>

<body>
<!-- NAVBAR -->
@include('admin.navbar.navbar')
<!-- /NAVBAR -->

<div class="page-container">
    <div class="page-content">
        <!-- SIDEBAR -->
        @include('admin.sidebar.sidebar')


        <!-- SIDEBAR -->

        <!-- PAGE CONTENT -->
    @yield('content')
    <!-- /PAGE CONTENT -->
    </div>
</div>
<script type="text/javascript" src="{{ asset('/') }}backend/admin/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}backend/admin/lib/js/tether.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}backend/admin/lib/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{ asset('/') }}backend/admin/lib/js/chartist.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}backend/admin/assets/js/app.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}backend/admin/assets/js/toastr.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
{{--<script type="text/javascript" src="{{ asset('assets/backend/lib/thirdparty/ckeditor/ckeditor.js') }}"></script>--}}

<script type="text/javascript">
    // $(function() {
    //     // CKEDITOR.replace("editor",{height:"350px",extraPlugins:"forms"});
    //     CKEDITOR.replace("editor",{height:"350px",width:"100%",extraPlugins:"forms"});
    // });

    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor',{height:"500px",width:"100%"} );

</script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
@yield('js')
@if($errors->any())
    <script>
        $(document).ready(function () {
            @foreach($errors->all() as $error)
            toastr.error('{{ $error }}', "Opps!")
            @endforeach
        })
    </script>
@endif
@if(session()->has('success'))
    <script>
        $(document).ready(function () {
            toastr.success('{{ session('success') }}', "Success")
        })
    </script>
@endif
</body>

</html>
