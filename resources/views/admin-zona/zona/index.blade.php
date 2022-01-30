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
    @endsection