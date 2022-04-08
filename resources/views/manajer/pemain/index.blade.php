@extends('layouts.zona')
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
        <h1>Data Pemain</h1>
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
                            <a class="btn btn-warning btn-sm" href="{{ route('kelusia', Auth::user()->id) }}">Daftar Kelompok Usia</a>
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
                                        <th>Nama</th>
                                        <th>Zona</th>
                                        <th>Klub</th>
                                        <th>Status</th>
                                        <th>Kelompok Usia</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($pemain as $pemains)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $pemains->namaPemain }}</td>
                                        <td>{{ $pemains->zona }}</td>
                                        <td>{{ $pemains->klub }}</td>
                                        <td style="color: #8B0000;">{{ $pemains->status }}</td>
                                        <td class="text-right">
                                            @if($pemains->status == 'Dalam Proses' || $pemains->status == 'Ditolak')
                                            <div class="d-flex">
                                                <form class="needs-validation form-inline" method="POST" action="{{ url('/pemain/kelusia') }}/{{ Auth::user()->id}}/{{ $pemains->id }}">
                                                    {{ csrf_field() }}
                                                    <select style="width: 100%;  padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;  resize: vertical; color: gray;" name="usia" id="cars">
                                                        <option value="Pilih Usiaa">Pilih Usia</option>
                                                        @foreach($zonakel as $zonakels)
                                                        <option value="{{ $zonakels->kelompok_usia->id }}">{{ $zonakels->kelompok_usia->usia }}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn btn-primary"> Tambah</button>
                                                </form>
                                            </div>
                                            @endif
                                        </td>
                                        <td class="text-right">
                                            <div class="d-flex">
                                                @if($pemains->status == 'Dalam Proses' || $pemains->status == 'Ditolak')
                                                <form action="{{ url('pemain') }}/{{ $pemains->id }}" method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data pemain ini?');">Hapus</button>
                                                </form>
                                                @endif
                                                <a class="btn btn-info btn-sm" href="{{ route('pemain.detail', [Auth::user()->id, $pemains->id])}}">Detail</a>
                                                @if($pemains->status == 'Diterima')
                                                <a class="btn btn-warning btn-sm" href="{{route('print-id', $pemains->id)}}">Print</a>
                                                @endif
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
                <h6 class="modal-title">Tambah Pemain</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                    <form class="needs-validation form-inline" method="POST" action="{{ url('pemain/add', Auth::user()->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" name="namaPemain" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Nama Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">TTL</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="date" name="ttl" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        TTL Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sekolah</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" name="sekolah" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Sekolah Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NISN</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" name="nisn" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        NISN Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor Punggung</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="number" name="no_punggung" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Nomor Punggung Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Posisi</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <input type="text" name="posisi" class="form-control" required="" placeholder="">
                                    <div class="invalid-feedback">
                                        Posisi Harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Zona</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    @foreach($user as $users)
                                    <select style="width: 100%;  padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;  resize: vertical; color: gray;" name="zona" id="cars" disabled>
                                        <option value="zona">{{ $users->namaKota }}</option>
                                    </select>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                @foreach($klub as $klubs)
                                <label class="col-sm-2 col-form-label">Klub</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <select style="width: 100%;  padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;  resize: vertical; color: gray;" name="klub" id="cars" disabled>
                                        <option value="{{ $klubs->namaKlub }}">{{ $klubs->namaKlub }}</option>
                                    </select>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Foto Pemain</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <div class="custom-file">
                                        <input value="Upload" placeholder="Masukkan Logo Klub" type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" onchange="readURL(this);">
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <img id="blah" src="#" alt="foto pemainmu" />
                                </div>
                            </div>

                            <!-- scan nisn -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NISN Pemain</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <div class="custom-file">
                                        <input value="Upload" placeholder="Foto pemain" type="file" name="nisn" class="form-control @error('nisn') is-invalid @enderror" onchange="readURLNisn(this);">
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <img id="blah_nisn" src="#" alt="nisn" />
                                </div>
                            </div>

                            <!-- scan ijazah -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ijazah Pemain</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <div class="custom-file">
                                        <input value="Upload" placeholder="Foto pemain" type="file" name="ijazah" class="form-control @error('ijazah') is-invalid @enderror" onchange="readURLIjazah(this);">
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <img id="blah_ijazah" src="#" alt="ijazah" />
                                </div>
                            </div>

                            <!-- scan kk -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kartu Keluarga </label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <div class="custom-file">
                                        <input value="Upload" placeholder="Foto pemain" type="file" name="kk" class="form-control @error('kk') is-invalid @enderror" onchange="readURLKK(this);">
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <img id="blah_kk" src="#" alt="kartu keluarga" />
                                </div>
                            </div>

                            <!-- scan akte -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Akte Kelahiran</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <div class="custom-file">
                                        <input value="Upload" placeholder="Foto pemain" type="file" name="akte" class="form-control @error('akte') is-invalid @enderror" onchange="readURLAkte(this);">
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <img id="blah_akte" src="#" alt="akte kelahiran" />
                                </div>
                            </div>

                            <!-- scan raport -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Raport</label>
                                <div class="input-group mb-2 mr-sm-2 col-sm-8">
                                    <div class="custom-file">
                                        <input value="Upload" placeholder="Foto pemain" type="file" name="raport" class="form-control @error('foto') is-invalid @enderror" onchange="readURL(this);">
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
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
<script>
    var msg = "{{Session::get('alert')}}";
    var exist = "{{Session::has('alert')}}";
    if (exist) {
        alert(msg);
    }
</script>
@endsection