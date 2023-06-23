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
                        <h3 class="card-title">Report Aset Berdasarkan Kode Barang</h3>
                        {{-- <div style="float: right">
                            <a href="/reportasetpdf" target="_blank" class="btn btn-danger">Cetak PDF</a>
                            <a href="/reportasetexcel" target="_blank" class="btn btn-success">Cetak Excel</a>
                        </div> --}}
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
                                    <th>Merk/Type</th>
                                    <th>Harga</th>
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
                            @foreach ($data as $p)
                                <tbody>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            {{ $p->kode_barang }}
                                        </td>
                                        <td>
                                            @foreach ($data1 as $d)
                                                @if ($p->kode_barang == $d->kode_barang)
                                                    {{ $d->nama_barang }}
                                                    <br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($data1 as $d)
                                                @if ($p->kode_barang == $d->kode_barang)
                                                    {{ $d->register }}
                                                    <br>
                                                    @php
                                                        $harga = $d->sum('harga');
                                                    @endphp
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($data1 as $d)
                                                @if ($p->kode_barang == $d->kode_barang)
                                                    {{ $d->merktype }}
                                                    <br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($data1 as $d)
                                                @if ($p->kode_barang == $d->kode_barang)
                                                    {{ str($d->harga) }}
                                                    <br>
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                            <tbody>
                                <tr>
                                    <td colspan="5" style="text-align: center">Total Harga</td>
                                    <td>
                                        {{ str($harga) }}
                                    </td>
                                </tr>
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
