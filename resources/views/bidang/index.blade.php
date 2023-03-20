@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Lokasi Aset</h3>
                        <a href="{{ route('aset.create') }}" type="button" class="btn btn-success" style="float: right">Tambah
                            Aset</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Merk / Type</th>
                                    <th>Kepemilikan</th>
                                    <th>Kondisi</th>
                                    <th>Tahun</th>
                                    <th>Sumber</th>
                                    <th>Bidang</th>
                                    <th>Ruang</th>
                                    {{-- <th>Kategori</th>
                                    <th>Perawatan</th>
                                    <th>Jangka Waktu</th>
                                    <th>Tanggal Perawatan</th> --}}
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
                                        <td>{{ $p->kode_barang }}</td>
                                        <td>{{ $p->nama_barang }}</td>
                                        <td>{{ $p->merktype }}</td>
                                        <td>{{ $p->status }}</td>
                                        <td>{{ $p->kondisi }}</td>
                                        <td>{{ $p->tahun }}</td>
                                        <td>{{ $p->sumber }}</td>
                                        <td>{{ $p->bidang->nama_bidang }}</td>
                                        <td>{{ $p->bidang->ruang }}</td>
                                        {{-- <td>{{ $p->kategori->kategori }}</td>
                                        <td>{{ $p->kategori->perawatan }}</td>
                                        <td>{{ $p->kategori->jangka_waktu }}</td>
                                        <td>{{ $p->kategori->tanggal_perawatan }}</td> --}}
                                        <td>
                                            @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                                <form action="{{ route('bidang.destroy', $p->id) }}" method="post"
                                                    style="display:inline">
                                                    <a href="{{ route('bidang.edit', $p->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Yakin ingin menghapus data ? Data tidak dapat dipulihkan')">Delete</button>
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
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
    @include('bidang.scriptDelete')
@endsection
