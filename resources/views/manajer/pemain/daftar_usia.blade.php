@extends('layouts.zona')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('pemain.zona', Auth::user()->id) }}">Daftar Pemain</a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> Detail</li>
                </ol>
            </nav>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No.
                                    </th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($kelompok_usia as $kelompok_usias)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $kelompok_usias->namaPemain }}</td>
                                    <td>{{ $kelompok_usias->usia }}</td>
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
@endsection