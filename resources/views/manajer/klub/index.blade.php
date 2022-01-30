@extends('layouts.manajer')

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Anda Belum Menambahkan Data Klub Sepakbola</h1>
    </div>
        <div class="section-body">
            <div class="card-header-action">
                <a class="btn btn-icon icon-left btn-primary" href="{{ route('klub.create') }}">Tambah Klub</a>
            </div>
    </div>
</section>
@endsection