@extends('layouts.zona')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Pilih Zona</h1>
    </div>
    <div class="row">
        @foreach($zonas as $zona)
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $zona->namaKota }}</h5>
                    <p class="card-text">Klik tombol dibawah ini!</p>
                    <a href="{{ route('klub.zona', $zona->id) }}" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection