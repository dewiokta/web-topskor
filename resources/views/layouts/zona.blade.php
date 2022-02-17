<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" href="images/logo_title.png">
    <title>Liga Topskor Indonesia</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/css/componn.css') !!}" rel="stylesheet">
    <style>
        .navbar-bg {
            background-color: #272358;
        }

        .main-sidebar,
        #sidebar-wrapper,
        .sidebar-menu {
            background-color: #272358;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <!-- <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">Data Klub</a></li>
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">Data Official</a></li>
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">Data Pemain</a></li> -->
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{!! asset('assets/img/avatar/avatar-1.png') !!}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </form>

                        </div>
                    </li>
                </ul>
            </nav>
            <!-- sidebar -->
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a class="text-light" href="{{ route('dashboard') }}"><img src="../images/logo-topskor.png" height="100" alt=""><span>LIGA TOPSKOR</span></a>
                    </div>
                    <br>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#"><img src="{!! asset('assets/img/logo-topskor.png') !!}" height="60" alt=""></a>
                    </div>
                    <br><br><br>
                    @if (Auth::user()->hasRole('manajertim'))
                    @foreach($user as $users)
                    <ul class="sidebar-menu">
                        <li class=""><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-ruler-vertical"></i> <span> Rules</span></a></li>
                        @if($users->zona_id == null)
                        <li class=""><a class="nav-link" href="{{ route('pilih-zona') }}"><i class="fas fa-city"></i> <span>Pilih Zona</span></a></li>
                        @endif
                        <li><a class="nav-link" href="{{ route('klub.zona', $users->id) }}"><i class="fas fa-football-ball"></i> <span>Klub Sepak Bola</span></a></li>
                        <li><a class="nav-link" href="{{ route('official.zona', $users->id) }}"><i class="fas fa-user-friends"></i> <span>Official Team</span></a></li>
                        <li class=""><a class="nav-link" href="{{ route('pemain.zona', $users->id) }}"><i class="fas fa-user-alt"></i> <span>Pemain</span></a></li>
                    </ul>
                    @endforeach
                    @endif
                    @if (Auth::user()->hasRole('adminpusat'))
                    <ul class="sidebar-menu">
                        <li class="nav-item ">
                            <a href="{{ route('dashboard') }}" class="nav-link" data-toggle="dropdown"><i class="fas fa-calculator"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Manajemen</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Manajemen</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('admin.zona') }}">Zona</a></li>
                                <li><a class="nav-link" href="{{ route('admin.kelusia') }}">Kelompok Usia</a></li>
                                <li><a class="nav-link" href="{{ route('admin.zonakelusia') }}">Zona - Kelompok Usia</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.klub') }}" class="nav-link"><i class="	fas fa-database"></i> <span>Data</span></a>
                        </li>
                    </ul>
                    @endif
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="#">Student of Polythecnic of Malang</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>


    <!-- JS Libraies -->
    <script src="/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/modules-datatables.js"></script>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <!-- Page Specific JS File -->
</body>

</html>