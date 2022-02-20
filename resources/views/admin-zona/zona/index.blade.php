@extends('layouts.zona')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Zona</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Zona</h4>
                        <div class="card-header-action">
                            <a class="btn btn-icon icon-left btn-primary" href="" data-toggle="modal" data-target="#exampleModalLong">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No.
                                        </th>
                                        <th>Nama Kota</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($zonas as $zona)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $zona->namaKota }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <form class="needs-validation form-inline" method="POST" action="{{ url('/admin/zona/edit') }}/{{ $zona->id }}">
                                                        {{ csrf_field() }}
                                                        <div class="input-group">
                                                            <input type="text" name="namaKota" value="{{$zona->namaKota}}" class="form-control" required="" placeholder="">
                                                            <div class="invalid-feedback">
                                                                Lokasi Usia Harus diisi
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary"> Edit</button>
                                                    </form>
                                                </div>
                                                <div class="col">
                                                    <form action="{{ url('admin/zona/delete') }}/{{ $zona->id }}" method="post">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin menghapus data zona ini?');">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
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

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Zona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card">
                <div class="modal-body">
                    <form class="needs-validation form-inline" method="POST" action="{{ url('admin/zona/post') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-form-label">Lokasi</label>
                            <div class="input-group">
                                <input type="text" name="namaKota" class="form-control" required="" placeholder="">
                                <div class="invalid-feedback">
                                    Lokasi Usia Harus diisi
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection