@extends('layouts.admin')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Klub Sepak Bola</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Klub Sepakbola</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Logo</th>
                                        <th>Alamat Tersurat</th>
                                        <th>Nomor Telepon</th>
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
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Klub</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt="" width="250px"> <br>
                <table>
                    <tbody>
                        <tr>
                            <td>Alamat Bersurat</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Akte SBB/ Klub</td>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td>Alamat Tempat Latihan</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab Klub/SBB</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Kompetesi yang Diikuti</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Partisipasi di Liga Topskor</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Kelompok Usia yang Dibina</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Jumlah Siswa</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Jumlah Pelatih</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Keanggotaan</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Prestasi yang Pernah Diraih</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Sosial Media</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Website</td>
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