@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Bidang</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('bidang.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kode Bidang</label>
                                <input type="text" name="kode"
                                    class="form-control @error('kode') is-invalid @enderror"
                                    placeholder="Masukkan Kode Bidang" value="{{ $data->kode }}">
                                @error('kode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Bidang</label>
                                <input type="text" name="nama_bidang"
                                    class="form-control @error('nama_bidang') is-invalid @enderror"
                                    placeholder="Masukkan Nama Bidang" value="{{ $data->nama_bidang }}">
                                @error('nama_bidang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kepala Bidang</label>
                                <input type="text" name="kepala_bidang"
                                    class="form-control @error('kepala_bidang') is-invalid @enderror"
                                    placeholder="Masukkan Kepala Bidang" value="{{ $data->kepala_bidang }}">
                                @error('kepala_bidang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Ruang</label>
                                <input type="text" name="ruang"
                                    class="form-control @error('ruang') is-invalid @enderror" placeholder="Masukkan Ruangan"
                                    value="{{ $data->ruang }}">
                                @error('ruang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('bidang.index') }}" data class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
