@extends('layouts.manajer')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Official Tim Sepak Bola</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Official</h4>
                        <div class="card-header-action">
                            <a class="btn btn-icon icon-left btn-primary" href="{{ route('official.create') }}">Tambah Data</a>
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
                                        <th>Nama Lenngkap</th>
                                        <th>Jabatan</th>
                                        <th>Lisensi</th>
                                        <th>TTL</th>
                                        <th>No Telepon</th>
                                        <th>Email</th>
                                        <th>Sosial Media</th>
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