<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="images/logo_title.png">
    <title>Liga Topskor Indonesia</title>

    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a87e9d7c5f.js" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container" style="margin-top: 15px; margin-bottom: 15px;">
            <a class="navbar-brand" href="/">
                <img src="{{ url('images/logo.png') }}" height="72" width="253">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a  href="/about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a  href="/informasi">Informasi Umum</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <footer class="site-footer text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="footernote">
                        Connect with PT Topskor Indonesia
                    </p>
                    <p>
                        <a href="#" class="social-item"><span class="fab fa-whatsapp"></span></a>
                        <a href="#" class="social-item"><span class="fab fa-facebook"></span></a>
                        <a href="#" class="social-item"><span class="fab fa-twitter"></span></a>
                        <a href="#" class="social-item"><span class="fab fa-instagram"></span></a>
                    </p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This website is made <i class="fas fa-heart" aria-hidden="true" style="color: #B22222"></i> Malang State Polytechnic Student
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
    </footer>
    <script src="js/jquery-.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/anim.js"></script>
    <script>
        //----HOVER CAPTION---//	  
        jQuery(document).ready(function($) {
            $('.fadeshop').hover(
                function() {
                    $(this).find('.captionshop').fadeIn(150);
                },
                function() {
                    $(this).find('.captionshop').fadeOut(150);
                }
            );
        });
    </script>
</body>
</html>
