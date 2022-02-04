@extends('layouts.manajer')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Tim Anda Akan Masuk Dalam Zona <b style="color: red;">"{{ $zona->namaKota }}"</b></h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Pemain</h4>
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
                                            #
                                        </th>
                                        <th>Nama</th>
                                        <th>Foto</th>
                                        <th>Zona</th>
                                        <th>Kelompok Usia</th>
                                        <th>Status</th>
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
<div class="modal" id="CreateArticleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Tambah Pemain</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <form class="needs-validation form-inline" novalidate="">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Nama Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">TTL</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="date" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        TTL Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sekolah</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Sekolah Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NISN</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        NISN Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor Punggung</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="number" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Nomor Punggung Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Posisi</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Posisi Harus diisi
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
                                <label class="col-sm-2 col-form-label">Foto Pemain</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" onchange="readURL(this);">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <img id="blah" src="#" alt="your logo" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="SubmitCreateArticleForm">Kirim</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
@endsection