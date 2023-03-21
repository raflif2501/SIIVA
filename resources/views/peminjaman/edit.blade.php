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
                                <label>Nama_Barang</label>
                                <select class="form-control" name="barang_id">
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
                                <input type="text" name="nama_peminjam"
                                    class="form-control @error('nama_peminjam') is-invalid @enderror"
                                    placeholder="Masukkan Nama Peminjam" value="{{ $data->nama_peminjam }}">
                                @error('nama_peminjam')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
