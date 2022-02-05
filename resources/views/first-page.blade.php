@extends('layouts.first-page')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Pilih Zona</h1>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Data Tim Anda</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{ route('pilih-zona') }}" class="btn btn-primary">Lengkapi Data Anda</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection