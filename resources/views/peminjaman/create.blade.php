@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Aset</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('aset.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12" style="display: none">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" name="kode_barang" value="{{ $kode }}"
                                    class="form-control @error('kode_barang') is-invalid @enderror"
                                    placeholder="Kode Barang">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Aset</label>
                                <input type="text" name="nama_barang"
                                    class="form-control @error('nama_barang') is-invalid @enderror"
                                    placeholder="Masukkan Nama Aset" value="{{ old('nama_barang') }}">
                                @error('nama_barang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Merk / Type</label>
                                <input type="text" name="merktype"
                                    class="form-control @error('merktype') is-invalid @enderror"
                                    placeholder="Masukkan Merk / Type" value="{{ old('merktype') }}">
                                @error('merktype')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Status Kepemilikan</label>
                                <input type="text" name="status"
                                    class="form-control @error('status') is-invalid @enderror"
                                    placeholder="Masukkan Status Kepemilikan" value="{{ old('status') }}">
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kondisi</label>
                                <input type="text" name="kondisi"
                                    class="form-control @error('kondisi') is-invalid @enderror"
                                    placeholder="Masukkan Kondisi Asset" value="{{ old('kondisi') }}">
                                @error('kondisi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="date" name="tahun"
                                    class="form-control @error('tahun') is-invalid @enderror" placeholder="Masukkan Tahun"
                                    value="{{ old('tahun') }}">
                                @error('tahun')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Sumber</label>
                                <input type="text" name="sumber"
                                    class="form-control @error('sumber') is-invalid @enderror"
                                    placeholder="Masukkan Sumber Aset" value="{{ old('sumber') }}">
                                @error('sumber')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kategori Aset</label>
                                <input type="text" name="kategori"
                                    class="form-control @error('kategori') is-invalid @enderror"
                                    placeholder="Masukkan Kategori" value="{{ old('kategori') }}">
                                @error('kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Perawatan Aset</label>
                                <input type="text" name="perawatan"
                                    class="form-control @error('perawatan') is-invalid @enderror"
                                    placeholder="Masukkan Jenis Perawatan" value="{{ old('perawatan') }}">
                                @error('perawatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jangka Waktu Perawatan</label>
                                <input type="text" name="jangka_waktu"
                                    class="form-control @error('jangka_waktu') is-invalid @enderror"
                                    placeholder="Masukkan Jangka Waktu Perawatan" value="{{ old('jangka_waktu') }}">
                                @error('jangka_waktu')
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
                                    placeholder="Masukkan Tanggal Perawatan" value="{{ old('tanggal_perawatan') }}">
                                @error('tanggal_perawatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Bidang</label>
                                <input type="text" name="nama_bidang"
                                    class="form-control @error('nama_bidang') is-invalid @enderror"
                                    placeholder="Masukkan Nama Bidang" value="{{ old('nama_bidang') }}">
                                @error('nama_bidang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Letak Ruangan</label>
                                <input type="text" name="ruang"
                                    class="form-control @error('ruang') is-invalid @enderror"
                                    placeholder="Masukkan Nama Ruang" value="{{ old('ruang') }}">
                                @error('ruang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('aset.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
