@extends('layouts.admin')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Official</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Official</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Nama Lengkap</th>
                                        <th>Jabatan</th>
                                        <th>Lisensi</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-warning">Pending</a>
                                        <a href="#" class="btn btn-danger">Invalid</a>
                                        <a href="#" class="btn btn-success">Verified</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary btn-icon" href="">
                                            <li class="fas fa-edit"></li>
                                        </a>
                                        <a class="btn btn-sm btn-info btn-icon" href="" data-toggle="modal" data-target="#exampleModalScrollable">
                                            <li class="fas fa-eye" data-pack="ios" data-tags="view, see, exposed, look"></li>
                                        </a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Official</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table>
                    <tbody>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td>Lisensi</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Media Sosial</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection