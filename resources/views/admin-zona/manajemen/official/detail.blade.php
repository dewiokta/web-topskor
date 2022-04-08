@extends('layouts.zona')

@section('content')
<div class="container py-6">
    @foreach ($official as $officials)
    <div class="row">
        <<div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('admin.klub') }}">Data Klub</a> </li>
                    <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('klubs.official', $officials->klub_id) }}">Data Official</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Detail</li>
                </ol>
            </nav>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6><i class="fa fa-user"></i> Official Detail</h6>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama Official</td>
                            <td>:</td>
                            <td>{{ $officials->namaOfficial }}</td>
                        </tr>

                        <tr>
                            <td>Zona</td>
                            <td>:</td>
                            <td>{{ $officials->zona }}</td>
                        </tr>
                        <tr>
                            <td>Klub</td>
                            <td>:</td>
                            <td>{{ $officials->klub }}</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{ $officials->jabatan }}</td>
                        </tr>
                        <tr>
                            <td>Media Sosial (URL)</td>
                            <td>:</td>
                            <td>{{ $officials->medsos_url }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td>:</td>
                            <td>{{ $officials->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{ $officials->ttl }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $officials->email }}</td>
                        </tr>
                        <tr>
                            <td>Lisensi</td>
                            <td>:</td>
                            <td>{{ $officials->lisensi }}</td>
                        </tr>
                        <tr>
                            <td>Bukti Lisensi</td>
                            <td>:</td>
                            <td>
                                <img src="{{ url('images/lisensi') }}/{{ $officials->scan_lisensi }}" width="200" alt="...">
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection