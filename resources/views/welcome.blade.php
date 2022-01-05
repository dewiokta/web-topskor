<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Liga Topskor Indonesia</title>



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
    <style>
        .navbar-nav{
            margin-left: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container" style="margin-top: 15px;">
            <a class="navbar-brand" href="#">
                <img src="{{ url('images/logo.png') }}" height="92" width="253">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informasi Umum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="limiter">
        <div class="container-login100" style="background-image: url(images/background.png); ">
            <div class="container">
                <div class="row intro-text align-items-center justify-content-center">
                    <div>
                        <h1 style="color: black; font-weight: 600; font-size: 48px; font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;"><strong>LIGA TOPSKOR</strong>
                            <br><strong> INDONESIA</strong>
                        </h1>
                        <br>
                        <h5>Liga TopSkor adalah sebuah liga yang dibentuk untuk mewadahi<br>
                            bakat-bakat muda dibidang olahraga khususnya sepak bola.<br>
                            Liga TopSkor sudah menjadi kawah candradimuka bagi para pesepak bola muda <br>
                            di Indonesia untuk meningkatkan kemampuan mereka dalam mengolah si kulit bundar. <br>
                        </h5><br>
                        <a href="#">
                            <button class="login100-form-btn">Daftar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>