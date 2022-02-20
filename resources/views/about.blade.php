@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
    .koran {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;

        -webkit-column-width: 200px;
        -moz-column-width: 200px;
        column-width: 200px;

        margin-bottom: 70px;
        margin-left: 35px;
        margin-right: 35px;
        text-align: justify;
    }

    p {
        margin-right: 35px;
        margin-left: 35px;
        font-size: 14.5px;
        line-height: 1.7;
    }

    h5 {
        color: white;
        font-size: 18px;
        font-weight: normal;
        text-align: justify;
    }

    .tombol {
        cursor: pointer;
        position: absolute;
        top: 10.5%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: #00CED1;
        font-weight: bold;
        font-size: 30px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }
</style>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-login100" style="background-image: url(images/about1.png); ">
                <div class="container">
                    <div class="row intro-text align-items-center justify-content-center">
                        <div>
                            <h1 class="title-carousel" style="color: white; font-weight: 600; font-size: 48px; font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;"><strong>LIGA TOPSKOR</strong>
                            </h1>
                            <br>
                            <h5 class="capt-carousel">adalah sebuah liga yang dibentuk untuk <br>
                                mewadahi bakat bakat muda dibidang olahraga <br>
                                khususnya sepak bola. Liga TopSkor sudah <br>
                                menjadi kawah candradimuka bagi para <br>
                                pesepak bola muda di Indonesia untuk <br>
                                meningkatkan kemampuan mereka dalam <br>
                                mengolah si kulit bundar.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-login100" style="background-image: url(images/about.png); ">
                <div class="container">
                    <div class="row intro-text align-items-center justify-content-center">
                        <div>
                            <h5>Mohammad Yusuf Kurniawan selaku inisiator sekaligus <br>
                                Direktur Liga TopSkor mengatakan, kompetisi ini <br>
                                bertujuan menjadi tempat dilahirkannya para pemain <br>
                                timnas Indonesia <br>
                            </h5><br>
                            <br>
                            <h5><b>“Tidak terasa sudah satu dasawarsa berjalan, Liga <br>
                                    TopSkor telah menjelma menjadi parameter kompetisi <br>
                                    usia muda terbaik di Tanah Air. Tak terhitung pemain <br>
                                    nasional yang lahir dari Liga TopSkor. Itu sesuai jargon <br>
                                    kami: Liga TopSkor - Tempat para pemain tim nasional <br>
                                    dilahirkan” - Bung Yuke </b><br>
                            </h5><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev tombol" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next tombol" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<h1 style="margin: 70px; margin-bottom: 20px; font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;"><b>Sejarah Liga TopSkor</b></h1><br>
<div class="koran">
    <p>Pada 13 Maret 2011, Harian TopSkor secara resmi menggulirkan Liga TopSkor
        U-13 untuk pertama kalinya. Ketika itu, Harian TopSkor bekerja sama dengan
        SSB Jakarta Football Academy dan otoritas Komando Pertahanan Udara Nasional
        (Kohanudnas).
    </p>
    <p>Animo peserta ternyata sangat tinggi. Alhasil, mulai pelaksanaan kompetisi
        tahun 2012, Liga TopSkor digelar dengan dua divisi sekaligus (Divisi Utama
        dan Divisi 1) dan sejak saat itu diberlakukan sistem promo degradasi.</p>
    <p>
        Kemudian mulai tahun 2013, bekerja sama dengan SSB ASIOP Apacinti, TopSkor
        memperlebar skala pembinaan dengan juga menggelar Liga TopSkor U-15. Ajang
        ini dibuat untuk memelihara kesinambungan pembinaan dari fase kompetisi anak-anak
        (U-13) menuju ke kompetisi tingkat remaja (U-15).</p>
    <p>
        Pada musim 2016/2017, Liga TopSkor mengepakkan sayap dengan membuka kompetisi
        regional di Bandung, Pekanbaru, Makassar, Yogyakarta, Malang, dan Palu. Pada
        pertengahan tahun 2017, untuk pertama kalinya putaran nasional Liga TopSkor digelar
        di GOR Ciracas, Jakarta Timur.
    </p>
    <p>
        Kiprah Liga TopSkor terus berlanjut seiring kepercayaan stake holder di akar rumput
        yang semakin meluas. Alhasil, memasuki tahun ke-10 penyelenggaraan, Liga TopSkor
        telah menggelar kompetisi di 6 strata usia (U-12, U-13, U-14, U-15, U-16, U-17).
    </p>
    <p>
        Dan, pada musim 2021/2022, Liga TopSkor telah diputar di 10 Kota yakni: Jakarta, Bandung,
        Lampung, Pati, Madiun, Cirebon, Karawang, Batam, Palu, dan Papua.
    </p>
    <p> <b style="font-weight: 600; font-size: 18px;">Prestasi Internasional</b><br><br>
        Dalam perjalanannya, Liga TopSkor tidak saja menyelenggarakan kompetisi kemudian selesai.
        Namun, pemain-pemain berbakat dari hasil kompetisi tersebut dikumpulkan dan dibina secara
        berkesinambungan dalam wadah yang diberi nama TopSkor Indonesia atau dikenal dengan sebutan tim TSI.
    </p>
    <p>
        Tim TSI pertama kali dibentuk pada 2016 untuk mengikut ajang bergengsi Gothia Cup 2016 di Swedia.
        Ketika itu TSI turun di katagori usia 13 tahun, dan berhasil mencapai posisi runner-up di turnamen
        yang disebut-sebut sebagai Piala Dunia-nya Remaja itu.
    </p>
    <p>
        Kiprah Liga TopSkor terus berlanjut seiring kepercayaan stake holder di akar rumput yang semakin
        meluas. Alhasil, memasuki tahun ke-10 penyelenggaraan, Liga TopSkor telah menggelar kompetisi di
        6 strata usia (U-12, U-13, U-14, U-15, U-16, U-17).
    </p>
    <p>
        Dan, pada musim 2021/2022, Liga TopSkor telah diputar di 10 Kota yakni: Jakarta, Bandung, Lampung, Pati,
        Madiun, Cirebon, Karawang, Batam, Palu, dan Papua.
    </p>
    <p> <b style="font-weight: 600; font-size: 18px;">Sumbangsih untuk Tim Nasional</b> <br><br>
        Secara paralel dan berkesinambungan, Liga TopSkor selalu menyumbang pemain-pemain hasil kompetisinya
        ke skuad timnas usia muda. Alumni angkatan pertama Liga TopSkor yang mengecap seragam Timnas adalah
        Gian Zola Nasrullah dan Syahrian Abimanyu.
    </p>
    <p>
        Kemudian secara berturut-turut disusul oleh Muhammad Riyandi, Beckham Putra Nugraha, M. Rafli, Zahra Muzdalifah,
        Bagas-Bagus, Fajar Faturrahman, Brylian Aldama, Sutan Zico, Rendy Juliansyah, Supriadi, Andre Oktaviansyah, Athala Araihan, Muhamad Valeroen, Resa Aditya, dan masih banyak lagi yang lainnya.
    </p>
</div>
@endsection