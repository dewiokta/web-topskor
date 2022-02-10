@extends('layouts.pemain')

@section('content')
<div class="container py-6">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('pemain.zona', $zona->id) }}">Daftar Pemain</a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> Detail</li>
                </ol>
            </nav>
        </div>
        @foreach ($pemain as $pemains)
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6><i class="fa fa-user"></i> Pemain Detail</h6>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama Pemain</td>
                                <td>:</td>
                                <td>{{ $pemains->namaPemain }}</td>
                            </tr>
                            <tr>
                                <td>Zona</td>
                                <td>:</td>
                                <td>{{ $pemains->zona }}</td>
                            </tr>
                            <tr>
                                <td>Klub</td>
                                <td>:</td>
                                <td>{{ $pemains->klub }}</td>
                            </tr>
                            <tr>
                                <td>Kelompok Usia</td>
                                <td>:</td>
                                <td>
                                    <ul>
                                        @foreach($kelompok_usia as $kelompok_usias)
                                        <li>
                                            {{ $kelompok_usias->usia }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Punggung</td>
                                <td>:</td>
                                <td>{{ $pemains->no_punggung }}</td>
                            </tr>
                            <tr>
                                <td>Posisi</td>
                                <td>:</td>
                                <td>{{ $pemains->posisi }}</td>
                            </tr>
                            <tr>
                                <td>Sekolah</td>
                                <td>:</td>
                                <td>{{ $pemains->sekolah }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $pemains->ttl }}</td>
                            </tr>
                            <tr>
                                <td>Foto</td>
                                <td>:</td>
                                <td>
                                    <img src="{{ url('images/pemain') }}/{{ $pemains->foto }}" width="100" alt="...">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <h6 style="color: black;"><i class="fa fa-pencil-alt"></i> Edit Pemain</h7>
                        <br>
                        <form method="POST" action="{{ route('pemain.update', $pemains->id) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="namaPemain" class="col-md-2 col-form-label text-md-right">{{ __('Nama Pemain') }}</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" id="namaPemain" type="text" class="form-control @error('namaPemain') is-invalid @enderror" name="namaPemain" value="{{ $pemains->namaPemain }}" required autocomplete="namaPemain" autofocus>

                                    @error('namaPemain')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zona" class="col-md-2 col-form-label text-md-right">Zona</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" readonly id="zona" type="text" class="form-control @error('zona') is-invalid @enderror" name="zona" value="{{ $pemains->zona }}" required autocomplete="zona" autofocus>

                                    @error('zona')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="klub" class="col-md-2 col-form-label text-md-right">Klub</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" readonly id="klub" type="text" class="form-control @error('klub') is-invalid @enderror" name="klub" value="{{ $pemains->klub }}" required autocomplete="klub" autofocus>

                                    @error('klub')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sekolah" class="col-md-2 col-form-label text-md-right">Sekolah</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" id="sekolah" type="text" class="form-control @error('sekolah') is-invalid @enderror" name="sekolah" value="{{ $pemains->sekolah }}" required autocomplete="sekolah" autofocus>

                                    @error('sekolah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ttl" class="col-md-2 col-form-label text-md-right">Tanggal Lahir</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" id="ttl" type="date" class="form-control @error('ttl') is-invalid @enderror" name="ttl" value="{{ $pemains->ttl }}" required autocomplete="ttl" autofocus>

                                    @error('no_ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_punggung" class="col-md-2 col-form-label text-md-right">No. Punggung</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" id="no_punggung" type="text" class="form-control @error('no_punggung') is-invalid @enderror" name="no_punggung" value="{{ $pemains->no_punggung }}" required autocomplete="pemains" autofocus>

                                    @error('no_punggung')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="posisi" class="col-md-2 col-form-label text-md-right">Posisi</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" id="posisi" type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" value="{{ $pemains->posisi }}" required autocomplete="posisi" autofocus>

                                    @error('posisi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nisn" class="col-md-2 col-form-label text-md-right">NISN</label>

                                <div class="col-md-6">
                                    <input style="background-color: #ecebeb; color: black;" id="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ $pemains->nisn }}" required autocomplete="nisn" autofocus>

                                    @error('nisn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection