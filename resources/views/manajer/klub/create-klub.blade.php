@extends('layouts.manajer')

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Klub Sepak Bola</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Manajemen</a></div>
            <div class="breadcrumb-item">Klub Sepakbola</div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <form class="needs-validation form-inline" novalidate="">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Bersurat</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Alamat Harus diisi
                            </div>
                        </div>                       
                        <label class="col-sm-2 col-form-label">Akte SSB/Klub</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Akte SSB/Klub Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Tempat Latihan</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Alamat Tempat Latihan Harus diisi
                            </div>
                        </div>
                        <label class="col-sm-2 col-form-label">Penanggung Jawab Klub/SBB</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Penanggung Jawab Klub/SBB Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Nomor Telepon Harus diisi
                            </div>
                        </div>
                        <label class="col-sm-2 col-form-label">Kompetisi yang Diikuti</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Kompetisi yang Diikuti Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="email" class="form-control" required="">
                            <div class="invalid-feedback">
                                Email is invalid.
                            </div>
                        </div>
                        <label class="col-sm-2 col-form-label">Partisipasi di Liga Topskor</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Partisipasi Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Social Media</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="Masukkan URL Sosial Media">
                            <div class="invalid-feedback">
                                Sosial Media harus diisi
                            </div>
                        </div>
                        <label class="col-sm-2 col-form-label">Prestasi yang Pernah Diraih</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Prestasi Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Website</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="Masukkan URL Website">
                            <div class="invalid-feedback">
                                Website harus diisi
                            </div>
                        </div>
                        <label class="col-sm-2 col-form-label">Kelompok Usia yang Dibina</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Kelompok Usia Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jumlah Siswa</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                            <div class="invalid-feedback">
                                Jumlah Siswa Harus diisi
                            </div>
                        </div>
                        <label class="col-sm-2 col-form-label">Keanggotaan</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Keanggotaan Usia Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jumlah Pelatih</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                            <div class="invalid-feedback">
                                Jumlah Pelatih Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Logo Club</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" onchange="readURL(this);">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <img id="blah" src="#" alt="your logo" />
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection