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
                <form class="needs-validation form-inline" method="POST" action="{{ url('/pilih-zona') }}/{{ $zona->id }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <h5 class="card-title">{{ $zona->namaKota }}</h5>
                        <p class="card-text">Klik tombol dibawah ini!</p>
                        <button type="submit" class="btn btn-primary"> Daftar</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection