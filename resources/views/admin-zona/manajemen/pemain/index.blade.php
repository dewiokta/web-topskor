@extends('layouts.zona')
@section('content')
<div class="col-md-12 mt-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('admin.klub') }}">Data Klub</a> </li>
            <li class="breadcrumb-item active" aria-current="page"> Data Pemain</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="section-header">
        <h1>Pemain</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Data Pemain</h4>
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
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{ route('klubs.pemaindetail', $pemains->id) }}">Detail</a>
                                            <form class="needs-validation form-inline" method="POST" action="{{ url('admin/klub/pemain/edit') }}/{{ $pemains->id }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <select style="width: 100%;  padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;  resize: vertical; color: gray;" name="status">
                                                        <option value="">Pilih status</option>
                                                        <option value="Ditolak">Ditolak</option>
                                                        <option value="Diterima">Diterima</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary"> Update Status</button>
                                            </form>
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
@endsection