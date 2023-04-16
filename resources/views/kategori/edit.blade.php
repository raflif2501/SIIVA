@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Kategori</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('kategori.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kode Kategori</label>
                                <input type="text" name="kode"
                                    class="form-control @error('kode') is-invalid @enderror" placeholder="Masukkan Kode"
                                    value="{{ $data->kode }}">
                                @error('kode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" name="kategori"
                                    class="form-control @error('kategori') is-invalid @enderror"
                                    placeholder="Masukkan Kategori" value="{{ $data->kategori }}">
                                @error('kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jangka Perawatan</label>
                                <input type="text" name="jangka_perawatan"
                                    class="form-control @error('jangka_perawatan') is-invalid @enderror"
                                    placeholder="Masukkan jangka Perawatan (Jumlah Hari / Boleh Dikosongi)"
                                    value="{{ $data->jangka_perawatan }}">
                                @error('jangka_perawatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Perawatan</label>
                                <input type="date" name="tanggal_perawatan"
                                    class="form-control @error('tanggal_perawatan') is-invalid @enderror"
                                    placeholder="Masukkan Tanggal Perawatan" value="{{ $data->tanggal_perawatan }}">
                                @error('tanggal_perawatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('kategori.index') }}" data class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
