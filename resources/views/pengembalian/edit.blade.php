@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Letak Aset</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('pengembalian.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Pengembalian</label>
                                <input type="date" name="tanggal_pengembalian"
                                    class="form-control @error('tanggal_pengembalian') is-invalid @enderror"
                                    placeholder="Masukkan Tanggal Pengembalian" value="{{ $data->tanggal_pengembalian }}">
                                @error('tanggal_pengembalian')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status"
                                    class="form-control @error('status') is-invalid @enderror"
                                    placeholder="Masukkan Status Peminjaman Asset" value="{{ $data->status }}">
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('pengembalian.index') }}" data class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
