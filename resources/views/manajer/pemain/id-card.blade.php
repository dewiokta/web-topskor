<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Id Card</title>
    <style>
        .card {
            height: 54mm;
            width: 86mm;
        }
        .container{
            margin-left: 140;
        }

        td {
            font-size: 12px;
            padding-right: 15;
        }

        .judul-kartu {
            text-align: right;
            margin-top: -38;
            color: white;
            margin-right: 15;
            font-family: 'Lucida Sans Unicode';
            font-style: italic;
        }

        .logo {
            margin-top: 5;
        }

        .bg-judul {
            margin-top: -4;
        }

        .tabel {
            border: none;
            padding-left: 10;
            padding-bottom: 5;
        }
        .bg-logo{
            margin-left: 50;
            opacity: 0.50;
        }
    </style>
</head>

<body>
    @foreach ($pemains as $pemain)
    <div class="container">
        <div class="card">
            <img class="logo" height="50" width="50" src="{{ public_path('images/logo-topskor.png') }}" alt="">
            <img class="bg-judul" height="40" width="270" src="{{ public_path('images/dudu.png') }}" alt="">
            <h5 class="judul-kartu">Kartu Peserta</h5>
            <table class="tabel">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>: {{$pemain->namaPemain}}</td>
                        <td rowspan="4">
                            <img height="100" width="80" src="{{ public_path('images/pemain/'.$pemain->foto) }}">
                        </td>
                    </tr>
                    <tr>
                        <td>Posisi</td>
                        <td>: {{$pemain->posisi}}</td>
                    </tr>
                    <tr>
                        <td>Sekolah</td>
                        <td>: {{$pemain->sekolah}}</td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>: {{$pemain->nisn}}</td>
                    </tr>
                    <tr>
                        <td>Klub</td>
                        <td>: {{$pemain->klub}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- </div>
    </div> -->
    @endforeach
</body>

</html>