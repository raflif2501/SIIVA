@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Peminjaman Aset</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('peminjaman.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <select class="form-control" name="barang_id">
                                    @foreach ($data as $p)
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
                                    @foreach ($data1 as $p)
                                        <option value="{{ $p->id }}">{{ $p->nik }} - {{ $p->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kode Peminjaman</label>
                                <input type="string" name="kode"
                                    class="form-control @error('kode') is-invalid @enderror"
                                    placeholder="Masukkan Tanggal Peminjaman" value="{{ old('kode') }}">
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
                                    placeholder="Masukkan Tanggal Peminjaman" value="{{ old('tanggal_peminjaman') }}">
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
                                    placeholder="Masukkan Jangka Waktu Peminjaman Asset" value="{{ old('jangka_waktu') }}">
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
                                    placeholder="Masukkan Tujuan Peminjaman Asset" value="{{ old('tujuan') }}">
                                @error('tujuan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="display: none;">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status"
                                    class="form-control @error('status') is-invalid @enderror"
                                    placeholder="Masukkan Jangka Waktu Peminjaman Asset" value="Belum Dikembalikan">
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('peminjaman.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
