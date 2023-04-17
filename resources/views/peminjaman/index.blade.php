@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Peminjaman Aset</h3>
                        <a href="{{ route('peminjaman.create') }}" type="button" class="btn btn-success"
                            style="float: right">Tambah
                            Peminjaman Aset</a>
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
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tujuan</th>
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
                                        <td>{{ $p->tanggal_peminjaman }}</td>
                                        <td>{{ $p->tujuan }}</td>
                                        <td>
                                            @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                                <a href="{{ route('peminjaman.edit', $p->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <input type="button" class="btn btn-sm btn-danger"
                                                    data-id="{{ $p->id }}" onclick="deleteData(this)" value="Delete">
                                            @endrole
                                        </td>
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
    @include('peminjaman.scriptDelete')
@endsection
