@extends('layouts.app')
@section('title')
    {{ 'Report Aset Berdasarkan Kode Barang' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Aset Berdasarkan Kode Barang</h3>
                        @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                            <div style="float: right">
                                <button type="button" class="btn btn-primary mr-1" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Pilih Kode Barang
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Daftar Kode Barang</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @foreach ($data as $p)
                                                <a href="/report/{{ $p->kode_barang }}"
                                                    class="btn btn-primary mr-1">{{ $p->kode_barang }}</a>
                                            @endforeach
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
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
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Register</th>
                                    <th>Jumlah Aset</th>
                                    <th>Total Harga Aset</th>
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
                            @if ($kode != null)
                                <tbody>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            {{ $kode }}
                                        </td>
                                        <td>
                                            @foreach ($data1 as $p)
                                                {{ $p->nama_barang }}
                                                <br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($data1 as $p)
                                                {{ $p->register }}
                                                <br>
                                            @endforeach
                                        </td>
                                        <td>{{ $jumlah }}</td>
                                        <td>{{ str($harga) }}</td>
                                    </tr>
                                </tbody>
                            @endif
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
