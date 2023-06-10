@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Pemegang Aset</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('pemegang.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <select class="form-control" name="barang_id">
                                    <option value="{{ $data->barang_id }}">{{ $data->barang->kode_barang }} -
                                        {{ $data->barang->nama_barang }} - {{ $data->barang->merktype }}
                                    </option>
                                    @foreach ($data1 as $p)
                                        <option value="{{ $p->id }}">{{ $p->kode_barang }} -
                                            {{ $p->nama_barang }}
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
                                    <option value="{{ $data->karyawan_id }}">{{ $data->karyawan->nik }} -
                                        {{ $data->karyawan->nama }}
                                    </option>
                                    @foreach ($data2 as $p)
                                        <option value="{{ $p->id }}">{{ $p->nik }} -
                                            {{ $p->nama }}
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
                                    placeholder="Masukkan Tanggal Pemegang Aset" value="{{ $data->kode }}">
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
                                    value="{{ $data->surat }}">
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
                                    placeholder="Masukkan Tanggal Pemegang Aset" value="{{ $data->tanggal }}">
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
                                    placeholder="Masukkan Batas Tanggal Pemegang Aset" value="{{ $data->batas }}">
                                @error('batas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('pemegang.index') }}" data class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
