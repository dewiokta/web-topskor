@extends('layouts.pemain')

@section('content')
<!-- main content -->
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt">
                            <div class="col-12 col-lg-8 offset-lg-2">
                                <div class="wizard-steps">
                                    <div class="wizard-step wizard-step-active">
                                        <div class="wizard-step-icon">
                                            <i class="far fa-user"></i>
                                        </div>
                                        <div class="wizard-step-label">
                                            Data Club
                                        </div>
                                    </div>
                                    <div class="wizard-step">
                                        <div class="wizard-step-icon">
                                            <i class="fas fa-box-open"></i>
                                        </div>
                                        <div class="wizard-step-label">
                                            Data Official
                                        </div>
                                    </div>
                                    <div class="wizard-step">
                                        <div class="wizard-step-icon">
                                            <i class="fas fa-server"></i>
                                        </div>
                                        <div class="wizard-step-label">
                                            Data Pemain
                                        </div>
                                    </div>
                                    <div class="wizard-step">
                                        <div class="wizard-step-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="wizard-step-label">
                                            Konfirmasi
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="background-color: #D0E6F2;">
                    <h6 class="card-title">
                        Petunjuk Pengisian
                    </h6>
                    <p class="card-body">
                        1. Perhatikan dengan seksama data klub/SSB yang ada di formulir ini dan pastikan data tersebut adalah benar <br>
                        2. Semua data yang diinputkan pada form ini haruslah asli dan bukan rekayasa serta benar-benar dapat dipertanggungjawabkan <br>
                        3. Data yang diinputkan harus sesuai dengan isi bukti dokumen yang diupload <br>
                        4. Isikan baris-baris yang bertanda karakter (*) dengan data yang benar <br>
                        5. Tekan tombol Simpan untuk menyimpan perubahan <br>
                        6. Tekan tombol Selanjutnya untuk berpindah ke halaman selanjutnya <br>
                    </p>
                </div>

                <form class="wizard-content mt-2">
                    <div class="wizard-pane">
                        <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Name</label>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Email</label>
                            <div class="col-lg-4 col-md-6">
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 text-md-right text-left mt-2">Address</label>
                            <div class="col-lg-4 col-md-6">
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 text-md-right text-left mt-2">Role</label>
                            <div class="col-lg-4 col-md-6">
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="developer" class="selectgroup-input">
                                        <span class="selectgroup-button">Developer</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="ceo" class="selectgroup-input">
                                        <span class="selectgroup-button">CEO</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-lg-4 col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                    <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="#" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection