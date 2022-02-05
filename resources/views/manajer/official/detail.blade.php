@extends('layouts.official')

@section('content')
<div class="container py-6">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('official.zona', $zona->id) }}">Daftar Official</a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> Detail</li>
                </ol>
            </nav>
        </div>
        @foreach ($official as $officials)
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6><i class="fa fa-user"></i> Official Detail</h6>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama Official</td>
                                <td>:</td>
                                <td>{{ $officials->namaOfficial }}</td>
                            </tr>

                            <tr>
                                <td>Zona</td>
                                <td>:</td>
                                <td>{{ $officials->zona }}</td>
                            </tr>
                            <tr>
                                <td>Klub</td>
                                <td>:</td>
                                <td>{{ $officials->klub }}</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>{{ $officials->jabatan }}</td>
                            </tr>
                            <tr>
                                <td>Media Sosial (URL)</td>
                                <td>:</td>
                                <td>{{ $officials->medsos_url }}</td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td>:</td>
                                <td>{{ $officials->no_hp }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $officials->ttl }}</td>
                            </tr>
                            <tr>
                                <td>Lisensi</td>
                                <td>:</td>
                                <td>{{ $officials->lisensi }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $officials->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <h6 style="color: black;"><i class="fa fa-pencil-alt"></i> Edit Official</h7>
                    <br>
                    <form method="POST" action="{{ route('official.update', $officials->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="namaOfficial" class="col-md-2 col-form-label text-md-right">{{ __('Nama Official') }}</label>

                            <div class="col-md-6">
                                <input style="background-color: #ecebeb; color: black;" id="namaOfficial" type="text" class="form-control @error('namaOfficial') is-invalid @enderror" name="namaOfficial" value="{{ $officials->namaOfficial }}" required autocomplete="namaOfficial" autofocus>

                                @error('namaOfficial')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jabatan" class="col-md-2 col-form-label text-md-right">Jabatan</label>

                            <div class="col-md-6">
                            <input style="background-color: #ecebeb; color: black;" id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ $officials->jabatan }}" required autocomplete="jabatan" autofocus>

                                @error('jabatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="medsos_url" class="col-md-2 col-form-label text-md-right">Media Sosial (URL)</label>

                            <div class="col-md-6">
                            <input style="background-color: #ecebeb; color: black;" id="medsos_url" type="text" class="form-control @error('medsos_url') is-invalid @enderror" name="medsos_url" value="{{ $officials->medsos_url }}" required autocomplete="medsos_url" autofocus>

                                @error('medsos_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_hp" class="col-md-2 col-form-label text-md-right">No. Telp</label>

                            <div class="col-md-6">
                            <input style="background-color: #ecebeb; color: black;" id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ $officials->no_hp }}" required autocomplete="no_hp" autofocus>

                                @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ttl" class="col-md-2 col-form-label text-md-right">Tanggal Lahir</label>

                            <div class="col-md-6">
                            <input style="background-color: #ecebeb; color: black;" id="ttl" type="date" class="form-control @error('ttl') is-invalid @enderror" name="ttl" value="{{ $officials->ttl }}" required autocomplete="ttl" autofocus>

                                @error('no_ttl')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lisensi" class="col-md-2 col-form-label text-md-right">Lisensi</label>

                            <div class="col-md-6">
                            <input style="background-color: #ecebeb; color: black;" readonly id="lisensi" type="text" class="form-control @error('lisensi') is-invalid @enderror" name="lisensi" value="{{ $officials->lisensi }}" required autocomplete="lisensi" autofocus>

                                @error('lisensi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-md-right">Update lisensi</label>
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
                            <label for="lisensi" class="col-md-2 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                            <input style="background-color: #ecebeb; color: black;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $officials->email }}" required autocomplete="email" autofocus>

                                @error('email')
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