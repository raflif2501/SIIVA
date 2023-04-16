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
                                <label>Kode</label>
                                <input type="text" name="kode" value="{{ $kode }}"
                                    class="form-control @error('kode') is-invalid @enderror" placeholder="Kode">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" name="kode_barang"
                                    class="form-control @error('kode_barang') is-invalid @enderror"
                                    placeholder="Masukkan Kode Aset" value="{{ old('kode_barang') }}">
                                @error('kode_barang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Aset</label>
                                <input type="text" name="nama_barang"
                                    class="form-control @error('nama_barang') is-invalid @enderror"
                                    placeholder="Masukkan Merk / Type" value="{{ old('nama_barang') }}">
                                @error('nama_barang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Register</label>
                                <input type="text" name="register"
                                    class="form-control @error('register') is-invalid @enderror"
                                    placeholder="Masukkan Register (Boleh Dikosongi)" value="{{ old('register') }}">
                                @error('register')
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
                                    placeholder="Masukkan Merk / Type Aset" value="{{ old('merktype') }}">
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
                                <label>Bahan</label>
                                <input type="text" name="bahan"
                                    class="form-control @error('bahan') is-invalid @enderror"
                                    placeholder="Masukkan Bahan (Boleh Dikosongi)" value="{{ old('bahan') }}">
                                @error('bahan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" name="tahun"
                                    class="form-control @error('tahun') is-invalid @enderror"
                                    placeholder="Masukkan Tahun (Boleh Dikosongi)" value="{{ old('tahun') }}">
                                @error('tahun')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga"
                                    class="form-control @error('harga') is-invalid @enderror" placeholder="Masukkan Harga"
                                    value="{{ old('harga') }}">
                                @error('harga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Asal</label>
                                <input type="text" name="asal"
                                    class="form-control @error('asal') is-invalid @enderror"
                                    placeholder="Masukkan Asal - Usul Perolehan (Boleh Dikosongi)"
                                    value="{{ old('asal') }}">
                                @error('asal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Ukuran</label>
                                <input type="text" name="ukuran"
                                    class="form-control @error('ukuran') is-invalid @enderror"
                                    placeholder="Masukkan Ukuran (Boleh Dikosongi)" value="{{ old('ukuran') }}">
                                @error('ukuran')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pabrik</label>
                                <input type="text" name="pabrik"
                                    class="form-control @error('pabrik') is-invalid @enderror"
                                    placeholder="Masukkan Pabrik (Boleh Dikosongi)" value="{{ old('pabrik') }}">
                                @error('pabrik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Rangka</label>
                                <input type="text" name="rangka"
                                    class="form-control @error('rangka') is-invalid @enderror"
                                    placeholder="Masukkan Nomer Rangka (Boleh Dikosongi)" value="{{ old('rangka') }}">
                                @error('rangka')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Mesin</label>
                                <input type="text" name="mesin"
                                    class="form-control @error('mesin') is-invalid @enderror"
                                    placeholder="Masukkan Nomer Mesin (Boleh Dikosongi)" value="{{ old('mesin') }}">
                                @error('mesin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nomer Polisi</label>
                                <input type="text" name="nopol"
                                    class="form-control @error('nopol') is-invalid @enderror"
                                    placeholder="Masukkan Nomer Polisi (Boleh Dikosongi)" value="{{ old('nopol') }}">
                                @error('nopol')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>BPKB</label>
                                <input type="text" name="bpkb"
                                    class="form-control @error('bpkb') is-invalid @enderror"
                                    placeholder="Masukkan BPKB (Boleh Dikosongi)" value="{{ old('bpkb') }}">
                                @error('bpkb')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>ID Kategori</label>
                                <select class="form-control" name="kategori_id">
                                    @foreach ($data1 as $p)
                                        <option value="{{ $p->id }}">{{ $p->kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>ID Bidang</label>
                                <select class="form-control" name="bidang_id">
                                    @foreach ($data2 as $p)
                                        <option value="{{ $p->id }}">{{ $p->kode }} - {{ $p->nama_bidang }}
                                            -
                                            {{ $p->ruang }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="Keterangan">Keterangan/label>
                                    <textarea id="keterangan" name="keterangan" class="form-control" placeholder="Masukkan Keterangan (Boleh Dikosongi)"
                                        value="{{ old('keterangan') }}"></textarea>
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
