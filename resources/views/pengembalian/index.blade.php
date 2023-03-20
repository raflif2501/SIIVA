@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pengembalian</h3>
                        <a href="{{ route('peminjaman.create') }}" type="button" class="btn btn-success"
                            style="float: right">Tambah Peminjaman
                            Aset</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>nama Peminjam</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tujuan</th>
                                    <th>Status</th>
                                    <th>Tanggal Pengembalian</th>
                                    @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                        <th width="280px">Action</th>
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
                                        <td>{{ $p->nama_peminjam }}</td>
                                        <td>{{ $p->nama_barang }}</td>
                                        <td>{{ $p->tanggal_peminjaman }}</td>
                                        <td>{{ $p->tujuan }}</td>
                                        <td>{{ $p->pengembalian->status }}</td>
                                        <td>{{ $p->pengembalian->tanggal_pengembalian }}</td>
                                        @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                            <td>
                                                <a href="{{ route('pengembalian.edit', $p->id) }}"
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
    @include('barang.scriptDelete')
@endsection
