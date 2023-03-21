@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Peminjaman Aset</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('peminjaman.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <select class="form-control" name="barang_id">
                                    <option value="{{ $data->barang_id }}">{{ $data->barang_id }}"</option>
                                    @foreach ($data1 as $p)
                                        <option value="{{ $p->id }}">{{ $p->kode_barang }} - {{ $p->nama_barang }}
                                            - {{ $p->merktype }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Peminjam</label>
                                <select class="form-control" name="karyawan_id">
                                    <option value="{{ $dat2->karyawan_id }}">{{ $data->karyawan_id }}"</option>
                                    @foreach ($data1 as $p)
                                        <option value="{{ $p->id }}">{{ $p->nik }} - {{ $p->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Kode Peminjaman</label>
                                    <input type="string" name="kode"
                                        class="form-control @error('kode') is-invalid @enderror"
                                        placeholder="Masukkan Tanggal Peminjaman" value="{{ $data->kode }}">
                                    @error('kode')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tanggal Peminjaman</label>
                                    <input type="date" name="tanggal_peminjaman"
                                        class="form-control @error('tanggal_peminjaman') is-invalid @enderror"
                                        placeholder="Masukkan Tanggal Peminjaman" value="{{ $data->tanggal_peminjaman }}">
                                    @error('tanggal_peminjaman')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Jangka Waktu</label>
                                    <input type="text" name="jangka_waktu"
                                        class="form-control @error('jangka_waktu') is-invalid @enderror"
                                        placeholder="Masukkan Jangka Waktu Peminjaman Asset"
                                        value="{{ $data->jangka_waktu }}">
                                    @error('jangka_waktu')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tujuan</label>
                                    <input type="text" name="tujuan"
                                        class="form-control @error('tujuan') is-invalid @enderror"
                                        placeholder="Masukkan Tujuan Peminjaman Asset" value="{{ $data->tujuan }}">
                                    @error('tujuan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="float: right">
                            <a href="{{ route('peminjaman.index') }}" data class="btn btn-danger">Kembali</a>&ensp;
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
