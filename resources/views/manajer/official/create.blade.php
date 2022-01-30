@extends('layouts.manajer')

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Official Tim Sepak Bola</h1>
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
                        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Nama Harus diisi
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
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
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                TTL Harus diisi
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
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="email" class="form-control" required="">
                            <div class="invalid-feedback">
                                Email is invalid.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Media Sosial</label>
                        <div class="input-group mb-2 mr-sm-2 col-sm-3">
                            <input type="text" class="form-control" required="" placeholder="">
                            <div class="invalid-feedback">
                                Media Sosial Harus diisi
                            </div>
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