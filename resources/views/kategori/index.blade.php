@extends('layouts.app')
@section('title')
    {{ 'Data Kategori' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kategori Aset</h3>
                        @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <div style="float: right">
                                <a href="{{ route('kategori.create') }}" type="button" class="btn btn-success mr-1">Tambah
                                    Kategori </a>
                                <button type="button" class="btn btn-primary mr-1" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Upload Excel
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Upload File Excel</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="/importkategori" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="file" name="file" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="/downloadExcelKategori" class="btn btn-success">Download Format
                                                    Excel</a>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endrole
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Kategori</th>
                                    <th>Jangka Waktu Perawatan</th>
                                    <th>Jenis Perawatan</th>
                                    @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                        <th>Action</th>
                                    @endrole
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($data as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->kode }}</td>
                                        <td>{{ $p->kategori }}</td>
                                        <td>{{ $p->jangka_perawatan }} Hari</td>
                                        <td>{{ $p->jenis_perawatan }}</td>
                                        @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                            <td>
                                                <a href="{{ route('kategori.edit', $p->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <input type="button" class="btn btn-sm btn-danger"
                                                    data-id="{{ $p->id }}" onclick="deleteData(this)" value="Delete">
                                            </td>
                                        @endrole
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    @include('kategori.scriptDelete')
@endsection
