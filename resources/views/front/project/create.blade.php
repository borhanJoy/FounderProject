<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Epyllion Group | Home of Textiles, Readymade Garments, Accessories</title>

    <meta name="keywords" content="garments,epyllion,bangladesh,textiles,csr" />
    <meta name="description" content="Welcome to Epyllion Foundation, the CSR wing of Epyllion Group, the home of Textiles, Readymade Garments and Accessories">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}front/img/epyfavicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('/')}}front/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
    {{--sigunup style start--}}

    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('') }}signup/frontend/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/vendors/linericon/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/vendors/flat-icon/font/flaticon.css">
    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/css/custom.css">
    <link rel="stylesheet" href="{{ asset('/') }}signup/frontend/css/app.css">
{{--sigunup style end--}}
<!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href=" {{asset('/')}}front/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/css/theme.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/css/theme-elements.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/css/theme-blog.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/nivo-slider/nivo-slider.css">
    <link rel="stylesheet" href="{{asset('/')}}front/vendor/nivo-slider/themes/default/default.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/css/demos/demo-construction.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/css/skins/skin-construction.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('/')}}front/css/css/custom.css">
    <link rel="stylesheet" href="{{ asset('/') }}backend/admin/assets/css/toastr.css">

    <!-- Head Libs -->
    <script src="{{asset('/')}}front/vendor/modernizr/modernizr.min.js"></script>

</head>
<body data-spy="scroll" data-target="#sidebar" data-offset="120">

<div class="body">



    <div role="main" class="main">

        <section class="page-header page-header-modern page-header-background page-header-background-sm" style="background-image:url({{url('upload/1header-form.jpg')}});">



            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1><font color="black">Submit Your Project</font></h1>
                        <p><font color="black">Do you have a Project for Social Good? Fill out the details below to submit your Project. If we like your idea, we will reach out to you.</font></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-0 text-center mt-4">
                            <hr class="solid mt-0 mb-4">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-2">

            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="sidebar mt-2">
                        <h5 class="font-weight-bold"> </h5>
                        <ul class="nav nav-list flex-column">
                            <li class="nav-item"><a class="nav-link "href="{{route('submit.next')}}">Project Introduction</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('submit.next1')}}">Project Summary</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('submit.next2')}}">Project Funding</a></li>
                        </ul>
                    </aside>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('front.footer.footer');

<script src="{{asset('/')}}front/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}front/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="{{asset('/')}}front/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{asset('/')}}front/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="{{asset('/')}}front/vendor/popper/umd/popper.min.js"></script>
<script src="{{asset('/')}}front/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}front/vendor/common/common.min.js"></script>
<script src="{{asset('/')}}front/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="{{asset('/')}}front/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{asset('/')}}front/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="{{asset('/')}}front/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="{{asset('/')}}front/vendor/isotope/jquery.isotope.min.js"></script>
<script src="{{asset('/')}}front/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{asset('/')}}front/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}front/vendor/vide/jquery.vide.min.js"></script>
<script src="{{asset('/')}}front/vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('/')}}front/js/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('/')}}front/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('/')}}front/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('/')}}front/vendor/nivo-slider/jquery.nivo.slider.min.js"></script>
<script src="{{asset('/')}}front/js/js/views/view.contact.js"></script>

<!-- Demo -->
<script src="{{asset('/')}}front/js/js/demos/demo-construction.js"></script>

<!-- Theme Custom -->
<script src="{{asset('/')}}front/js/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('/')}}front/js/js/theme.init.js"></script>
<script type="text/javascript" src="{{ asset('/') }}backend/admin/assets/js/toastr.js"></script>

</body>
</html>
