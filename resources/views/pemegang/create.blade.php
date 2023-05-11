@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Pemegang Aset</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('pemegang.store') }}" enctype="multipart/form-data" method="POST">
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
                                <label>Kode Pemegang Aset</label>
                                <input type="string" name="kode"
                                    class="form-control @error('kode') is-invalid @enderror"
                                    placeholder="Masukkan Kode Pemegang Aset" value="{{ old('kode') }}">
                                @error('kode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nomer Surat</label>
                                <input type="string" name="surat"
                                    class="form-control @error('surat') is-invalid @enderror"
                                    placeholder="Masukkan Nomer Surat Pemegang Aset (Boleh Dikosongi)"
                                    value="{{ old('surat') }}">
                                @error('surat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Pemegang Aset</label>
                                <input type="date" name="tanggal"
                                    class="form-control @error('tanggal') is-invalid @enderror"
                                    placeholder="Masukkan Tanggal Pemegang Aset" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Batas Tanggal Pemegang Aset</label>
                                <input type="date" name="batas"
                                    class="form-control @error('batas') is-invalid @enderror"
                                    placeholder="Masukkan Batas Tanggal Pemegang Aset" value="{{ old('batas') }}">
                                @error('batas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('pemegang.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
