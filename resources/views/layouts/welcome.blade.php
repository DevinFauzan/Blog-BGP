<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Birma Gemilang Prima</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon-16x16.png" />

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- bootstrap.min css -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ionic Icon Css -->
    <link rel="stylesheet" href="{{ asset('assets/website/plugins/Ionicons/css/ionicons.min.css') }}?v=1.0">

    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/website/plugins/animate-css/animate.css') }}?v=1.0">

    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{ asset('assets/website/plugins/magnific-popup/dist/magnific-popup.css') }}?v=1.0">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/website/plugins/slick-carousel/slick/slick.css') }}?v=1.0">
    <link rel="stylesheet" href="{{ asset('assets/website/plugins/slick-carousel/slick/slick-theme.css') }}?v=1.0">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/website/css/style.css') }}?v=1.0">


    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">


    <!-- Load Bootstrap 5 and jQuery 3.6.0 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    .nav-item.active {
        color: #ff0000;
        /* Change to the desired color */
        font-weight: bold;
        /* Apply bold font */
    }
</style>

<body id="body">

    <!-- Header Start -->
    <header class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- header Nav Start -->
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <a class="navbar-brand" href="{{ route('website.landingpage', 'landingpage') }}">
                                <img style="max-height: 100px" src="{{ asset('assets/img/navbar-logo.png') }}" alt="Logo">
                            </a>
                    
                            <!-- Toggler/collapsible Button -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            {{-- <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item {{ Route::currentRouteName() === 'website.blog' ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('website.blog') }}">Blog</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div><!-- /.container-fluid -->
                    </nav>
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </header><!-- header close -->




    @yield('content')
    <!-- footer Start -->
    {{-- <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright">Copyright 2024 &copy; Birma Gemilang Prima
                        <br>
                    </p>
                </div>
            </div>
        </div> --}}
    </footer>

    <!--
    Essential Scripts
    =====================================-->

    <!-- <script src="js/jquery.counterup.js"></script> -->

    <!-- Main jQuery -->

    <script src="https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('assets/website/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/website/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!--  -->
    <script src="{{ asset('assets/website/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <!-- Mixit Up JS -->
    <script src="{{ asset('assets/website/plugins/mixitup/dist/mixitup.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/website/') }}plugins/count-down/jquery.lwtCountdown-1.0.js"></script> -->
    <script src="{{ asset('assets/website/plugins/SyoTimer/build/jquery.syotimer.min.js') }}"></script>


    <!-- Form Validator -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>



    <!-- Google Map -->
    <script src="{{ asset('assets/website/plugins/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="{{ asset('assets/website/js/script.js') }}"></script>




</body>

</html>
