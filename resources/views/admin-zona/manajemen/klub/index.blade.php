@extends('layouts.zona')
@section('content')
<style>
    .filters {
        text-align: center;
    }

    .filters ul {
        padding: 0;
        margin: 0 0 30px 0;
        border-radius: 15px;
    }

    .filters ul li {
        display: inline-block;
        cursor: pointer;
        padding: 20px;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
    }

    .filters ul li:hover {
        color: #bac964;
    }

    .filters ul li.active {
        color: #bac964;
    }
</style>
<section class="section">
    <div class="section-header">
        <h1>Klub</h1>
    </div>
    <section class="products mb-5">
        <div class="container">
            <div class="filters">
                <ul>
                    <li><a style="font-size: 14pt; color: 	#008B8B" href="{{ route('admin.klub') }}">Semua Zona</li>
                    @foreach($zonas as $zona)
                    <li><a style="font-size: 14pt; color: 	#008B8B" href="{{ route('klubs.zona', $zona->id) }}">{{ $zona->namaKota }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Data Klub Semua Zona</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No.
                                        </th>
                                        <th>Nama Klub</th>
                                        <th>Zona</th>
                                        <th>Nama Manajer</th>
                                        <th>Logo Klub</th>
                                        <th>Jumlah Pelatih</th>
                                        <th>Jumlah Siswa</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($klub as $klubs)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $klubs->namaKlub }}</td>
                                        <td>{{ $klubs->zona->namaKota }}</td>
                                        <td>{{ $klubs->user->name }}</td>
                                        <td>
                                            <img src="{{ url('images/logo_klub') }}/{{ $klubs->logo_klub }}" width="100" alt="...">
                                        </td>
                                        <td>{{ $klubs->jumlah_pelatih }} pelatih</td>
                                        <td>{{ $klubs->jumlah_siswa }} siswa</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{ route('adminklub.detail', $klubs->id) }}">Detail</a>
                                            <a class="btn btn-warning btn-sm" href="{{ route('klubs.official', $klubs->id) }}">Data Official</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('klubs.pemain', $klubs->id) }}">Data Pemain</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection