@extends('layouts.manajer')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Pemain Tim Sepak Bola</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Pemain</h4>
                        <div class="card-header-action">
                            <a class="btn btn-icon icon-left btn-primary" href="{{ route('pemain.create') }}">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Foto</th>
                                        <th>Nama Lenngkap</th>
                                        <th>TTL</th>
                                        <th>Sekolah</th>
                                        <th>NISN</th>
                                        <th>No Punggung</th>
                                        <th>Posisi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

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