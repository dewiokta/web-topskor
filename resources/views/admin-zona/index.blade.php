@extends('layouts.zona')

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <i class="fas fa-football-ball"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Klub</h4>
                    </div>
                    <div class="card-body">
                    {{ $klub }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                <i class="fas fa-user-friends"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Official</h4>
                    </div>
                    <div class="card-body">
                    {{ $official }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                <i class="fas fa-user-alt"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pemain</h4>
                    </div>
                    <div class="card-body">
                    {{ $pemain }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection