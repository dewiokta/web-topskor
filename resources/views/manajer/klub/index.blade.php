@extends('layouts.zona')

@section('content')

<section class="section">
    @if(empty($klub))
    <div class="section-header">
        <h1>Masukkan Klub Anda</h1>
    </div>
    <div class="section-body">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h6><i class="fa fa-pencil-alt"></i> Isi Data Klub Disini</h6>
                            <br>
                            <form method="POST" action="{{ url('/klub/add') }}/{{ Auth::user()->id }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label for="namaKlub" class="col-md-2 col-form-label text-md-right">{{ __('Nama Klub') }}</label>

                                    <div class="col-md-6">
                                        <input style="background-color: #ecebeb; color: black;" id="namaKlub" type="text" class="form-control @error('namaKlub') is-invalid @enderror" name="namaKlub" value="" required autocomplete="namaKlub" autofocus>

                                        @error('namaKlub')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Zona</label>
                                    <div class="input-group mb-2 mr-sm-2 col-sm-6">
                                        @foreach($user as $users)
                                        <select style="width: 100%;  padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;  resize: vertical; color: gray;" name="zona" id="cars" disabled>
                                            <option value="zona">{{ $users->namaKota }}</option>
                                        </select>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Partisipasi di Liga Topskor</label>
                                    <div class="input-group mb-2 mr-sm-2 col-sm-6">
                                        <select style="width: 100%;  padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;  resize: vertical; color: gray;" name="partisipasi_diligatopskor">
                                            <option value="">Pilih Tahun</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Akte SSB</label>
                                    <div class="input-group mb-2 mr-sm-2 col-sm-6">
                                        <select style="width: 100%;  padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;  resize: vertical; color: gray;" name="akte_sbb">
                                            <option value="">Pilih Akte</option>
                                            <option value="Berbadan Hukum">Berbadan Hukum</option>
                                            <option value="Tidak Berbadan Hukum">Tidak Berbadan Hukum</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat_bersurat" class="col-md-2 col-form-label text-md-right">{{ __('Alamat Bersurat') }}</label>

                                    <div class="col-md-6">
                                        <textarea style="background-color: #ecebeb; color: black;" id="alamat_bersurat" class="form-control @error('alamat_bersurat') is-invalid @enderror" name="alamat_bersurat" value="" required autocomplete="alamat_bersurat"></textarea>

                                        @error('alamat_bersurat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat_latihan" class="col-md-2 col-form-label text-md-right">Alamat Latihan</label>

                                    <div class="col-md-6">
                                        <textarea style="background-color: #ecebeb; color: black;" id="	alamat_latihan" class="form-control @error('alamat_latihan') is-invalid @enderror" name="alamat_latihan" value="" required autocomplete="alamat_latihan" autofocus></textarea>

                                        @error('alamat_latihan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="medsos_url" class="col-md-2 col-form-label text-md-right">Media Sosial (URL)</label>

                                    <div class="col-md-6">
                                        <input style="background-color: #ecebeb; color: black;" type="text" name="medsos_url" class="form-control @error('medsos_url') is-invalid @enderror" required="">

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
                                        <input style="background-color: #ecebeb; color: black;" id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp">

                                        @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="website" class="col-md-2 col-form-label text-md-right">Website (URL)</label>

                                    <div class="col-md-6">
                                        <input style="background-color: #ecebeb; color: black;" id="website" type="text" class="form-control" name="website">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="penanggungjawab_klub" class="col-md-2 col-form-label text-md-right">Penanggungjawab Klub</label>

                                    <div class="col-md-6">
                                        <input style="background-color: #ecebeb; color: black;" type="text" name="penanggungjawab_klub" class="form-control @error('penanggungjawab_klub') is-invalid @enderror" required="">

                                        @error('penanggungjawab_klub')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jumlah_siswa" class="col-md-2 col-form-label text-md-right">Jumlah Siswa</label>

                                    <div class="col-md-6">
                                        <input style="background-color: #ecebeb; color: black;" type="number" name="jumlah_siswa" class="form-control @error('jumlah_siswa') is-invalid @enderror" required="">

                                        @error('jumlah_siswa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jumlah_pelatih" class="col-md-2 col-form-label text-md-right">Jumlah Pelatih</label>

                                    <div class="col-md-6">
                                        <input style="background-color: #ecebeb; color: black;" type="number" name="jumlah_pelatih" class="form-control @error('jumlah_pelatih') is-invalid @enderror" required="">

                                        @error('jumlah_pelatih')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="keanggotaan_askot_askab" class="col-md-2 col-form-label text-md-right">Keanggotaan ASKOT/ASKAB</label>

                                    <div class="col-md-6">
                                        <input style="background-color: #ecebeb; color: black;" type="text" name="keanggotaan_askot_askab" class="form-control @error('keanggotaan_askot_askab') is-invalid @enderror" required="">

                                        @error('keanggotaan_askot_askab')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="prestasi" class="col-md-2 col-form-label text-md-right">Prestasi</label>

                                    <div class="col-md-6">
                                        <input style="background-color: #ecebeb; color: black;" type="text" name="prestasi" class="form-control @error('prestasi') is-invalid @enderror" required="">

                                        @error('keanggotaan_askot_askab')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kompetisi_yangdiikuti" class="col-md-2 col-form-label text-md-right">Kompetisi Yang Diikuti</label>

                                    <div class="col-md-6">
                                        <input style="background-color: #ecebeb; color: black;" type="text" name="kompetisi_yangdiikuti" class="form-control @error('kompetisi_yangdiikuti') is-invalid @enderror" required="">

                                        @error('kompetisi_yangdiikuti')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="logo_klub" class="col-md-2 col-form-label text-md-right">Logo Klub</label>

                                    <div class="col-md-6">
                                        <input value="Upload" placeholder="Masukkan Logo Klub" style="background-color: #ecebeb; color: black;" id="logo_klub" type="file" class="form-control @error('logo_klub') is-invalid @enderror" name="logo_klub">

                                        @error('logo_klub')
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

            </div>
        </div>
    </div>
    @endif
</section>

<div class="container py-6">
    @foreach($klubs as $klub)
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6><i class="fa fa-user"></i> Data Klub</h6>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama Klub</td>
                            <td>:</td>
                            <td>{{ $klub->namaKlub }}</td>
                        </tr>

                        <tr>
                            <td>Zona</td>
                            <td>:</td>
                            <td>{{ $klub->namaKota }}</td>
                        </tr>
                        <tr>
                            <td>Logo Klub</td>
                            <td>:</td>
                            <td>
                            <img src="{{ url('images/logo_klub') }}/{{ $klub->logo_klub }}" width="100" alt="...">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Bersurat</td>
                            <td>:</td>
                            <td>{{ $klub->alamat_bersurat }}</td>
                        </tr>
                        <tr>
                            <td>Alamat Latihan</td>
                            <td>:</td>
                            <td>{{ $klub->alamat_latihan }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td>:</td>
                            <td>{{ $klub->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>Medsos (URL)</td>
                            <td>:</td>
                            <td>{{ $klub->medsos_url }}</td>
                        </tr>
                        <tr>
                            <td>Website (URL)</td>
                            <td>:</td>
                            <td>{{ $klub->website }}</td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab Klub</td>
                            <td>:</td>
                            <td>{{ $klub->penanggungjawab_klub }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Siswa</td>
                            <td>:</td>
                            <td>{{ $klub->jumlah_siswa }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Pelatih</td>
                            <td>:</td>
                            <td>{{ $klub->jumlah_pelatih }}</td>
                        </tr>
                        <tr>
                            <td>Keanggotaan ASKOT/ASKAB</td>
                            <td>:</td>
                            <td>{{ $klub->keanggotaan_askot_askab }}</td>
                        </tr>
                        <tr>
                            <td>Akte SSB</td>
                            <td>:</td>
                            <td>{{ $klub->akte_sbb }}</td>
                        </tr>
                        <tr>
                            <td>Prestasi</td>
                            <td>:</td>
                            <td>{{ $klub->prestasi }}</td>
                        </tr>
                        <tr>
                            <td>Kompetisi Yang Diikuti</td>
                            <td>:</td>
                            <td>{{ $klub->kompetisi_yangdiikuti }}</td>
                        </tr>
                        <tr>
                            <td>Partisipasi Di Liga Topskor</td>
                            <td>:</td>
                            <td>{{ $klub->partisipasi_diligatopskor }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection