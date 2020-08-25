<!DOCTYPE HTML>
<html>
<head>
    <title>Admin Login -Epyllion Group</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/core.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/toastr.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/css/components.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/assets/icons/fontawesome/styles.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/lib/css/chartist.min.css">
    <script type="text/javascript" src="{{ asset('/') }}backend/assets/js/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
</head>

<body>
<div class="page-container">
    <!-- PAGE CONTENT -->
    <div class="content h-100">
        <div class="row h-100">
            <div class="col-lg-12">
                <div class="login card auth-box mx-auto my-auto">
                    <div class="card-block text-center">
                        <div class="user-icon">
                            <img src="{{asset('/')}}backend/admin/images/logo-epy.png" width="200" height="100">

                        </div>
                        <h4 class="text-light">Admin Login</h4>
                        <div class="user-details">
                            <form  action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-o"></i>
                                            </span>
                                        <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-key"></i>
                                            </span>
                                        <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /PAGE CONTENT -->
</div>
<script type="text/javascript" src="{{ asset('/') }}backend/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}backend/lib/js/tether.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}backend/lib/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{ asset('/') }}backend/lib/js/chartist.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}backend/assets/js/app.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}backend/assets/js/toastr.js"></script>
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
