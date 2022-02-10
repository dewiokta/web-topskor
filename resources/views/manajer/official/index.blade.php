@extends('layouts.official')
@section('content')

<style media="screen">
    .left {
        float: left;
    }

    .right {
        float: right;
    }
</style>
<section class="section">
    <div class="section-header">
        <h1>Tim Anda Akan Masuk Dalam Zona <b style="color: red;">"{{ $zona->namaKota }}"</b></h1>
    </div>
    <div class="input-group mb-3">
        <form action="#" method="GET">
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Searching...." class="form-control bg-white">
        </form>
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-search"></i>
            </span>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Official</h4>
                        <div class="card-header-action">
                            <button style="float: right; font-weight: 600; background: 	#8B0000; color: white;" class="btn " type="button" data-toggle="modal" data-target="#CreateArticleModal">
                                Buat Baru
                            </button>
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
                                        <th>Nama Lenngkap</th>
                                        <th>Jabatan</th>
                                        <th>Lisensi</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($official as $officials)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $officials->namaOfficial }}</td>
                                        <td>{{ $officials->jabatan }}</td>
                                        <td>{{ $officials->lisensi }}</td>
                                        <td>{{ $officials->ttl }}</td>
                                        <td style="color: #8B0000;">{{ $officials->status }}</td>
                                        <td>
                                            <div class="button">
                                                <ul class="right">
                                                    <form action="{{ url('official') }}/{{ $officials->id }}" method="post">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data official ini?');">Hapus</button>
                                                    </form>
                                                </ul>
                                                
                                                <ul class="left">
                                                    <a class="btn btn-info btn-sm" href="{{ route('official.detail', [$zona->id, $officials->id]) }}">Detail</a>
                                                </ul>
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
<div class="modal" id="CreateArticleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Tambah Official</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <form class="needs-validation form-inline" method="POST" action="{{ url('official/add', $zona->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class=" card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" name="namaOfficial" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Nama Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" name="jabatan" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Jabatan Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lisensi</label>
                                <div class="form-check form-check-inline ">
                                    <input name="lisensi[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="A">
                                    <label class="form-check-label" for="inlineCheckbox1">A</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input name="lisensi[]" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="B">
                                    <label class="form-check-label" for="inlineCheckbox2">B</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input name="lisensi[]" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="C">
                                    <label class="form-check-label" for="inlineCheckbox3">C</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input name="lisensi[]" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="D">
                                    <label class="form-check-label" for="inlineCheckbox3">D</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input name="lisensi[]" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Non-Lisensi">
                                    <label class="form-check-label" for="inlineCheckbox3">Non-Lisensi</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">TTL</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input name="ttl" type="date" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        TTL Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor Telepon</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input name="no_hp" type="text" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Nomor Telepon Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="email" name="email" class="form-control" required="">
                                    <div class="invalid-feedback">
                                        Email is invalid.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Zona</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <select style="width: 100%;  padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;  resize: vertical; color: gray;" name="zona" id="cars" disabled>
                                        <option value="zona">{{ $zona->namaKota }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                @foreach($klub as $klubs)
                                <label class="col-sm-2 col-form-label">Klub</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <select style="width: 100%;  padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;  resize: vertical; color: gray;" name="klub" id="cars" disabled>
                                        <option value="zona">{{ $klubs->namaKlub }}</option>
                                    </select>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Media Sosial</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input name="medsos_url" type="text" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Media Sosial Harus diisi
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" id="SubmitCreateArticleForm">Kirim</button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection