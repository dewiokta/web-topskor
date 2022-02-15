@extends('layouts.zona')
@section('content')
<div class="col-md-12 mt-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('admin.klub') }}">Data Klub</a> </li>
            <li class="breadcrumb-item active" aria-current="page"> Detail</li>
        </ol>
    </nav>
</div>
<div class="container py-6">
    @foreach($klubs as $klub)
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6><i class="fa fa-user"></i> Data Klub</h6>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama Klub</td>
                            <td>:</td>
                            <td>{{ $klub->namaKlub }}</td>
                        </tr>

                        <tr>
                            <td>Zona</td>
                            <td>:</td>
                            <td>{{ $klub->zona->namaKota }}</td>
                        </tr>
                        <tr>
                            <td>Logo Klub</td>
                            <td>:</td>
                            <td>
                                <img src="{{ url('images/logo_klub') }}/{{ $klub->logo_klub }}" width="100" alt="...">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Bersurat</td>
                            <td>:</td>
                            <td>{{ $klub->alamat_bersurat }}</td>
                        </tr>
                        <tr>
                            <td>Alamat Latihan</td>
                            <td>:</td>
                            <td>{{ $klub->alamat_latihan }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td>:</td>
                            <td>{{ $klub->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>Medsos (URL)</td>
                            <td>:</td>
                            <td>{{ $klub->medsos_url }}</td>
                        </tr>
                        <tr>
                            <td>Website (URL)</td>
                            <td>:</td>
                            <td>{{ $klub->website }}</td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab Klub</td>
                            <td>:</td>
                            <td>{{ $klub->penanggungjawab_klub }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Siswa</td>
                            <td>:</td>
                            <td>{{ $klub->jumlah_siswa }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Pelatih</td>
                            <td>:</td>
                            <td>{{ $klub->jumlah_pelatih }}</td>
                        </tr>
                        <tr>
                            <td>Keanggotaan ASKOT/ASKAB</td>
                            <td>:</td>
                            <td>{{ $klub->keanggotaan_askot_askab }}</td>
                        </tr>
                        <tr>
                            <td>Akte SSB</td>
                            <td>:</td>
                            <td>{{ $klub->akte_sbb }}</td>
                        </tr>
                        <tr>
                            <td>Prestasi</td>
                            <td>:</td>
                            <td>{{ $klub->prestasi }}</td>
                        </tr>
                        <tr>
                            <td>Kompetisi Yang Diikuti</td>
                            <td>:</td>
                            <td>{{ $klub->kompetisi_yangdiikuti }}</td>
                        </tr>
                        <tr>
                            <td>Partisipasi Di Liga Topskor</td>
                            <td>:</td>
                            <td>{{ $klub->partisipasi_diligatopskor }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection