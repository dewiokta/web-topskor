@extends('layouts.manajer')

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Klub Sepak Bola</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Manajemen</a></div>
            <div class="breadcrumb-item">Pemain</div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <form class="needs-validation form-inline" novalidate="">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Nama Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">TTL</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                TTL Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sekolah</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Sekolah Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NISN</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                NISN Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor Punggung</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Nomor Punggung Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Posisi</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Posisi Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto Pemain</label>
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