@extends('layouts.zona')

@section('content')
<div class="container py-6">
    @foreach ($pemain as $pemains)
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('admin.klub') }}">Data Klub</a> </li>
                    <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('klubs.pemain', $pemains->klub_id) }}">Data Pemain</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Detail</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6><i class="fa fa-user"></i> Pemain Detail</h6>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama Pemain</td>
                                <td>:</td>
                                <td>{{ $pemains->namaPemain }}</td>
                            </tr>
                            <tr>
                                <td>Zona</td>
                                <td>:</td>
                                <td>{{ $pemains->zona }}</td>
                            </tr>
                            <tr>
                                <td>Klub</td>
                                <td>:</td>
                                <td>{{ $pemains->klub }}</td>
                            </tr>
                            <tr>
                                <td>Kelompok Usia</td>
                                <td>:</td>
                                <td>
                                    <ul>
                                        @foreach($kelompok_usia as $kelompok_usias)
                                        <li>
                                            {{ $kelompok_usias->usia }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Punggung</td>
                                <td>:</td>
                                <td>{{ $pemains->no_punggung }}</td>
                            </tr>
                            <tr>
                                <td>Posisi</td>
                                <td>:</td>
                                <td>{{ $pemains->posisi }}</td>
                            </tr>
                            <tr>
                                <td>Sekolah</td>
                                <td>:</td>
                                <td>{{ $pemains->sekolah }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $pemains->ttl }}</td>
                            </tr>
                            <tr>
                                <td>Foto</td>
                                <td>:</td>
                                <td>
                                    <img src="{{ url('images/pemain') }}/{{ $pemains->foto }}" width="200" alt="...">
                                </td>
                            </tr>
                            <tr>
                                <td>Akte Kelahiran</td>
                                <td>:</td>
                                <td>
                                    <img src="{{ url('images/akte') }}/{{ $pemains->scan_akte }}" width="200" alt="...">
                                </td>
                            </tr>
                            <tr>
                                <td>Kartu Keluarga</td>
                                <td>:</td>
                                <td>
                                    <img src="{{ url('images/kartu_keluarga') }}/{{ $pemains->scan_kk }}" width="200" alt="...">
                                </td>
                            </tr>
                            <tr>
                                <td>NISN</td>
                                <td>:</td>
                                <td>
                                    <img src="{{ url('images/nisn') }}/{{ $pemains->scan_nisn }}" width="200" alt="...">
                                </td>
                            </tr>
                            <tr>
                                <td>Ijazah</td>
                                <td>:</td>
                                <td>
                                    <img src="{{ url('images/ijazah') }}/{{ $pemains->scan_ijazah }}" width="200" alt="...">
                                </td>
                            </tr>
                            <tr>
                                <td>Raport</td>
                                <td>:</td>
                                <td>
                                    <iframe type="application/pdf" src="{{ url('images/raport') }}/{{ $pemains->scan_rapot }}" frameborder="0" 
                                    style="width: 500px;" height="300">

                                    </iframe>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection