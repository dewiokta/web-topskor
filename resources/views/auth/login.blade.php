<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="images/logo_title.png">
    <title>Liga Topskor Indonesia</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a87e9d7c5f.js" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="css/style.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->
    <style>
        .tombol {
            font-size: 16px;
            color: gray;
            line-height: 1.2;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            min-width: 120px;
            height: 50px;
            border-radius: 30px;
            background: #F2F2F2;
            background: -webkit-linear-gradient(top, #0A2941, black);
            background: -o-linear-gradient(top, #0A2941, black);
            background: -moz-linear-gradient(top, #0A2941, black);
            background: linear-gradient(top, #0A2941, black);
            position: relative;
            z-index: 1;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }
        .tombol::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            border-radius: 30px;
            background-color: #F2F2F2;
            top: 0;
            left: 0;
            opacity: 1;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }
        .tombol:hover {
            color: #fff;
        }
        .tombol:hover:before {
            opacity: 0;
        }
    </style>

</head>

<body id="LoginForm">
    <div class="limiter">
        <div class="container-login100" style="background-image: url(images/login.png);">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-logo">
                        <a class="navbar-brand" id="logo-login" href="{{ url('/') }}">
                            <img src="{{ url('images/logo_title.png') }}">
                        </a>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="email" placeholder="Username">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div> <br>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
                        <label class="label-checkbox100" for="ckb1">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="tombol">
                            {{ __('Login') }}
                        </button>

                    </div>
                    <hr style="color: white;">
                    <center>
                        <div class="p-t-90" >
                            <a class="txt1" style="margin-bottom: 20px;" href="{{ url('/') }}"> Kembali ke beranda</a>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>


</body>

</html>