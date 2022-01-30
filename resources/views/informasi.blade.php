@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #1C4759;
    }

    .border {
        border-radius: 20px;
    }

    h5 {
        font-size: 15px;
        color: white;
    }

    a {
        color: #64C2F6;
    }

    a:hover {
        color: aquamarine;
    }

    .icon {
        text-align: justify;
        width: 45%;
        color: white;
        font-size: 15px;
    }

    .yellow {
        width: 580px;
        height: 666px;
        justify-content: right;
        align-items: right;
        background-repeat: no-repeat;
        background-position: right;
        background-size: cover;
        position: relative;
        left: 55%;
        top: -520px;
    }

    .dok{
        margin-top: -580px;
    }
</style>
<br><br>
<div class="container py-4">
    <div class="card border">
        <div class="card-body" style="margin-left: 22px; margin-right: 22px; margin-top: 15px; margin-bottom: 15px; font-size: 15px; text-align: justify;">
            <h1 style="margin-bottom: 15px; font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;"><b>Ketentuan Umum.</b></h1>
            Screening Liga TopSkor merupakan tahap awal yang perlu dilakukan bagi klub dan pemain sebelum mengikuti
            kompetisi Liga TopSkor. Screening Liga TopSkor dilakukan oleh panitia verifikasi Liga TopSkor dibawah
            koordinasi panitia pelaksana Liga TopSkor dengan seleksi berdasarkan hasil data yang telah diinputkan
            official peserta Liga TopSkor dan kriteria atau standart lain yang ditetapkan oleh Liga TopSkor.
        </div>
    </div>
    <br>
    <div class="card border">
        <div class="card-body" style="margin-left: 22px; margin-right: 22px; margin-top: 15px; margin-bottom: 15px; font-size: 15px; text-align: justify;">
            <h1 style="margin-bottom: 15px; font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;"><b>Persyaratan Pendaftaran.</b></h1>
            <ol style="font-size: 15px; text-align: justify;">
                <li>Peserta memiliki akte hukum, atau sekurang-kurangnya mempunyai AD-ART pendirian organisasi
                    (SSB/Akademi/Klub).</li>
                <li>Peserta telah terdaftar sebagai anggota ASPROV atau ASKAB atau ASKOT PSSI setempat atau
                    sekurang-kurangnya telah terafiliasi dengan federasi setempat.</li>
                <li>Bagi pelatih (minimal) berlisensi D PSSI dan wajib mengunggah SCAN ASLI LISENSI pada form yang telah disediakan.</li>
                <li>Tim peserta Liga TopSkor U-12 Musim 2022/2023 diikuti oleh pemain kelahiran 1 Januari 2010 sd 31 Desember 2011.</li>
                <li>Tim peserta Liga TopSkor U-13 Musim 2022/2023 diikuti oleh pemain kelahiran 1 Januari 2009 sd 31 Desember 2010.</li>
                <li>Tim peserta Liga TopSkor U-14 Musim 2022/2023 diikuti oleh pemain kelahiran 1 Januari 2008 sd 31 Desember 2009.</li>
                <li>Tim peserta Liga TopSkor U-15 Musim 2022/2023 diikuti oleh pemain kelahiran 1 Januari 2007 sd 31 Desember 2008.</li>
                <li>Tim peserta Liga TopSkor U-16 Musim 2022/2023 diikuti oleh pemain kelahiran 1 Januari 2006 sd 31 Desember 2007.</li>
                <li>Tim peserta Liga TopSkor U-17 Musim 2022/2023 diikuti oleh pemain kelahiran 1 Januari 2005 sd 31 Desember 2006.</li>
                <li>Joker merupakan pemain kelahiran 1 (satu) tahun diatas kelompok usia yang diikuti.</li>
            </ol>
        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-12">
            <h1 style=" margin-bottom: 18px; font-family: 'Arial Black' , 'Arial Bold' , Gadget, sans-serif; color: white;">
                <b>Tahap Pendaftaran.</b>
            </h1>
            <h5>
                Tahapan pendaftaran Liga TopSkor Musim 2022/2023 dilakukan melalui laman <br>
                <a href="http://registrasi-screening-ligatopskor.ac.id">http://registrasi-screening-ligatopskor.ac.id</a> dengan cara sebagai berikut :
            </h5><br>
            <div class="row">
                <div class="icon">
                    <img src="images/icon/zona.png" width="75px" style="float:left; margin:0 8px 4px 0;" />
                    Memilih zona dan kelompok usia yang ingin diikuti dengan ketentuan pemain dapat memilih
                    lebih dari satu kelompok usia dalam satu klub/SSB/Akademi yang diikuti.
                </div>
            </div>
            <div class="row">
                <div class="icon">
                    <img src="images/icon/biodata.png" width="75px" style="float:left; margin:0 8px 4px 0;" />
                    Mengisi Biodata klub, official dan pemain
                </div>
            </div>

            <div class="row">
                <div class="icon">
                    <img src="images/icon/dokumen.png" width="75px" style="float:left; margin:0 8px 4px 0;" />
                    Mengunggah dokumen pendukung*) dengan persyaratan pendaftaran Liga TopSkor Musim 2022/2023
                </div>
            </div>
        </div>
        <div class="col">

            <div class="yellow" style="background-image: url(images/yellow.png);"></div>
        </div>
    </div>

    <div class="dok">
        <h4 style=" margin-bottom: 18px; font-family: 'Arial Black' , 'Arial Bold' , Gadget, sans-serif; color: white;">*)
            <b>Dokumen pendukung </b>
        </h4>
        <h5>
            Bagi pendaftar kompetisi Liga TopSkor wajib mengunggah dokumen pendukung sebagai salah satu syarat terverifikasinya proses seleksi klub/SSB/akademi yang ingin mendaftar pada Liga TopSkor. Berikut dokumen yang wajib diunggah :
        </h5>
        <ol style="font-size: 15px; text-align: justify; color:white;">
            <li>Scan asli Kartu Keluarga (KK).</li>
            <li>Scan asli Akta Kelahiran.</li>
            <li>Scan asli Ijasah terakhir.</li>
            <li>Scan asli NISN terbaru (bercode) atau Kartu NISN.</li>
            <li>Scan asli surat rekomendasi dari ASPROV/ASKAB/ASKOT.</li>
            <li>Scan asli sertifikat pelatih berlisensi AFC/PSSI (sesuai persyaratan di atas).</li>
            <li>Bagi klub/SSB/Akademi telah berbadan hukum, scan asli dokumen/akte pendirian SSB/Academy.</li>
        </ol>
    </div>

    <br><br>
</div>
@endsection