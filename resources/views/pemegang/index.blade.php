@extends('layouts.app')
@section('title')
    {{ 'Data Pemegang Aset Tahun' }} {{ $tahun }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pemegang Aset</h3>
                        @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <div style="float: right">
                                <a href="{{ route('pemegang.create') }}" type="button" class="btn btn-success mr-1">Tambah
                                    Pemegang </a>
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
                                        <form action="/importpemegang" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="file" name="file" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="/downloadExcelPemegang" class="btn btn-success">Download Format
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
                                    <th>Nama Peminjam</th>
                                    <th>Bidang</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Merk / Type</th>
                                    <th>Nomer Surat</th>
                                    <th>Tanggal</th>
                                    <th>Batas</th>
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
                                        <td>{{ $p->karyawan->nama }}</td>
                                        <td>{{ $p->karyawan->bidang->nama_bidang }}</td>
                                        <td>{{ $p->barang->kode_barang }}</td>
                                        <td>{{ $p->barang->nama_barang }}</td>
                                        <td>{{ $p->barang->merktype }}</td>
                                        <td>{{ $p->surat }}</td>
                                        <td>{{ $p->tanggal }}</td>
                                        <td>{{ $p->batas }}</td>
                                        @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                            <td>
                                                <a href="{{ route('pemegang.show', $p->id) }}" class="btn btn-sm btn-primary"
                                                    target="_blank">Pernyataan</a>
                                                <a href="/cetak/{{ $p->id }}" class="btn btn-sm btn-info"
                                                    target="_blank">Pakta
                                                    Integritas</a>
                                                <a href="/stiker/{{ $p->id }}" class="btn btn-sm btn-primary active"
                                                    target="_blank">QR Code</a>
                                                <a href="{{ route('pemegang.edit', $p->id) }}"
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
    @include('pemegang.scriptDelete')
@endsection
