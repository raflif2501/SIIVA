@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pemegang Aset</h3>
                        <a href="{{ route('pemegang.create') }}" type="button" class="btn btn-success"
                            style="float: right">Tambah
                            Pemegang Aset</a>
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
                                        <td>
                                            @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                                <a href="{{ route('pemegang.edit', $p->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <a href="{{ route('pemegang.show', $p->id) }}" class="btn btn-sm btn-primary"
                                                    target="_blank">Pernyataan</a>
                                                <a href="/cetak/{{ $p->id }}" class="btn btn-sm btn-info"
                                                    target="_blank">Pakta
                                                    Integritas</a>
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
    @include('pemegang.scriptDelete')
@endsection
