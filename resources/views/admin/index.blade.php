@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $barang }}</h3>
                        <p>Aset</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-settings"></i>
                    </div>
                    <a href="{{ route('aset.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $bidang }}</h3>
                        <p>Bidang</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-location"></i>
                    </div>
                    <a href="{{ route('bidang.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $kategori }}</h3>
                        <p>Kategori</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a href="{{ route('kategori.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $karyawan }}</h3>
                        <p>Karyawan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="{{ route('karyawan.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pembayaran Pajak Kendaraan Bermotor ( {{ $today }} )</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Nama Barang</th>
                                    <th>Merk/Type</th>
                                    <th>Nopol</th>
                                    <th>Pajak</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($motor as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->nama_barang }}</td>
                                        <td>{{ $p->merktype }}</td>
                                        <td>{{ $p->nopol }}</td>
                                        <td>{{ $p->tanggal_perawatan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-row card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Catatan
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="fas fa-money-check-alt mr-2"></i>
                                    Pajak Kendaraan Bermotor
                                </h5>
                                <div class="card-tools">
                                    <a href="/home">
                                        <span>( {{ $pajak }} )</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="fas fa-tools mr-2"></i>
                                    Aset Baru
                                </h5>
                                <div class="card-tools">
                                    <a href="/asetbaru">
                                        <span>( {{ $aset }} )</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="fas fa-users-cog mr-2"></i>
                                    Pemegang Aset Baru
                                </h5>
                                <div class="card-tools">
                                    <a href="/pemegangbaru">
                                        <span>( {{ $pemegang }} )</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="fas fa-users mr-2"></i>
                                    Karyawan Baru
                                </h5>
                                <div class="card-tools">
                                    <a href="/karyawanbaru">
                                        <span>( {{ $kywn }} )</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="fas fa-user mr-2"></i>
                                    Akun Diperbarui
                                </h5>
                                <div class="card-tools">
                                    <a href="/userdiperbarui">
                                        <span>( {{ $akun }} )</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
