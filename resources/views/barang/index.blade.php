@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Aset</h3>
                        <div style="float: right">
                            <a href="/stiker" type="button" class="btn btn-primary" target="_blank">Cetak Stiker</a>
                            <a href="{{ route('aset.create') }}" type="button" class="btn btn-success">Tambah
                                Aset</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Register</th>
                                    <th>Merk/Type</th>
                                    <th>Bahan</th>
                                    <th>Tahun</th>
                                    <th>Harga</th>
                                    <th>Asal</th>
                                    <th>Ukuran</th>
                                    <th>Pabrik</th>
                                    <th>Rangka</th>
                                    <th>Mesin</th>
                                    <th>Nopol</th>
                                    <th>BPKB</th>
                                    <th>Tanggal Perawatan</th>
                                    <th>Keterangan</th>
                                    <th>Kategori</th>
                                    <th>Jangka Perawatan</th>
                                    <th>Jenis Perawatan</th>
                                    <th>Bidang</th>
                                    <th>Ruang</th>
                                    @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                        <th>Action</th>
                                    @endrole
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            @php
                                function str($rupiah)
                                {
                                    $rp = 'Rp ' . number_format($rupiah, 2, ',', '.');
                                    return $rp;
                                }
                            @endphp
                            <tbody>
                                @foreach ($data as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td> {{ QrCode::size(100)->generate($p->kode) }}</td>
                                        <td>{{ $p->kode_barang }}</td>
                                        <td>{{ $p->nama_barang }}</td>
                                        <td>{{ $p->register }}</td>
                                        <td>{{ $p->merktype }}</td>
                                        <td>{{ $p->bahan }}</td>
                                        <td>{{ $p->tahun }}</td>
                                        <td>{{ str($p->harga) }}</td>
                                        <td>{{ $p->asal }}</td>
                                        <td>{{ $p->ukuran }}</td>
                                        <td>{{ $p->pabrik }}</td>
                                        <td>{{ $p->rangka }}</td>
                                        <td>{{ $p->mesin }}</td>
                                        <td>{{ $p->nopol }}</td>
                                        <td>{{ $p->bpkb }}</td>
                                        <td>{{ $p->tanggal_perawatan }}</td>
                                        <td>{{ $p->keterangan }}</td>
                                        <td>{{ $p->kategori->kategori }}</td>
                                        <td>{{ $p->kategori->jangka_perawatan }}</td>
                                        <td>{{ $p->kategori->jenis_perawatan }}</td>
                                        <td>{{ $p->bidang->nama_bidang }}</td>
                                        <td>{{ $p->bidang->ruang }}</td>
                                        <td>
                                            @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                                <a href="{{ route('aset.show', $p->id) }}" target="_blank"
                                                    class="btn btn-sm btn-primary">Cetak
                                                    Stiker</a>
                                                <a href="{{ route('aset.edit', $p->id) }}"
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
    @include('barang.scriptDelete')
@endsection
