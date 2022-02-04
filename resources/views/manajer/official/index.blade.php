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
                                            #
                                        </th>
                                        <th>Nama Lenngkap</th>
                                        <th>Jabatan</th>
                                        <th>Lisensi</th>
                                        <th>TTL</th>
                                        <th>No. Telp</th>
                                        <th>Email</th>
                                        <th>Sosial Media</th>
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
                <h6 class="modal-title">Tambah Official</h6>
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
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Jabatan Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lisensi</label>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">A</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">B</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">C</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">D</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">Non-Lisensi</label>
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
                                <label class="col-sm-2 col-form-label">Nomor Telepon</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Nomor Telepon Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="email" class="form-control" required="">
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
                                <label class="col-sm-2 col-form-label">Media Sosial</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Media Sosial Harus diisi
                                    </div>
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