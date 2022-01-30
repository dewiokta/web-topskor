@extends('layouts.admin')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Zona</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Zona</h4>
                        <div class="card-header-action">
                            <a class="btn btn-icon icon-left btn-primary" href="" data-toggle="modal" data-target="#exampleModalLong">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Zona</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a class="btn btn-sm btn-primary btn-icon" href="">
                                            <li class="fas fa-edit"></li>
                                        </a>
                                        <a class="btn btn-sm btn-info btn-icon" href="" data-toggle="modal" data-target="#exampleModalScrollable">
                                            <li class="fas fa-eye" data-pack="ios" data-tags="view, see, exposed, look"></li>
                                        </a>
                                        <a class="btn btn-sm btn-danger btn-icon" href="">
                                            <li class="fas fa-trash" data-pack="ios" data-tags="view, see, exposed, look"></li>
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
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Zona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card">
                <div class="modal-body">
                    <form class="needs-validation" novalidate="">
                        <div class="form-group">
                            <label class="col-form-label">Lokasi</label>
                            <div class="input-group">
                                <input type="text" class="form-control" required="" placeholder="">
                                <div class="invalid-feedback">
                                    Lokasi Usia Harus diisi
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- detail data -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Zona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table>
                    <tbody>
                        <tr>
                            <td>Zona</td>
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