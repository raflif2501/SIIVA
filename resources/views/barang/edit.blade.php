@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Aset</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('aset.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-12" style="display: none">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="kode"
                                    class="form-control @error('kode') is-invalid @enderror"
                                    placeholder="{{ $data->kode }}" value="{{ $data->kode }}">
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
                                    placeholder="Masukkan Kode Aset" value="{{ $data->kode_barang }}">
                                @error('kode_barang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_barang"
                                    class="form-control @error('nama_barang') is-invalid @enderror"
                                    placeholder="Masukkan Merk / Type" value="{{ $data->nama_barang }}">
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
                                    placeholder="Masukkan Register (Boleh Dikosongi)" value="{{ $data->register }}">
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
                                    placeholder="Masukkan Merk / Type Aset" value="{{ $data->merktype }}">
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
                                    placeholder="Masukkan Bahan Aset" value="{{ $data->bahan }}">
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
                                    placeholder="Masukkan Tahun Aset (Boleh Dikosongi)" value="{{ $data->tahun }}">
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
                                    class="form-control @error('harga') is-invalid @enderror"
                                    placeholder="Masukkan Harga Aset" value="{{ $data->harga }}">
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
                                    value="{{ $data->asal }}">
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
                                    placeholder="Masukkan Ukuran (Boleh Dikosongi)" value="{{ $data->ukuran }}">
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
                                    placeholder="Masukkan Pabrik (Boleh Dikosongi)" value="{{ $data->pabrik }}">
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
                                    placeholder="Masukkan Nomer Rangka (Boleh Dikosongi)" value="{{ $data->rangka }}">
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
                                    placeholder="Masukkan Nomer Mesin (Boleh Dikosongi)" value="{{ $data->mesin }}">
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
                                    placeholder="Masukkan Nomer Polisi (Boleh Dikosongi)" value="{{ $data->nopol }}">
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
                                    placeholder="Masukkan BPKB (Boleh Dikosongi)" value="{{ $data->bpkb }}">
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
                                <label>Tanggal Perawatan</label>
                                <input type="date" name="tanggal_perawatan"
                                    class="form-control @error('tanggal_perawatan') is-invalid @enderror"
                                    placeholder="Masukkan Tanggal Perawatan (Boleh Dikosongi)"
                                    value="{{ $data->tanggal_perawatan }}">
                                @error('tanggal_perawatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label for="keterangan">Keterangan/label>
                                    <textarea id="keterangan" name="keterangan" class="form-control" placeholder="Masukkan Keterangan (Boleh Dikosongi)"
                                        value="{{ $data->keterangan }}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>ID Kategori</label>
                                <select class="form-control" name="kategori_id">
                                    <option value="{{ $data->kategori_id }}">
                                        {{ $data->kategori->kategori }}
                                    </option>
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
                                    <option value="{{ $data->bidang_id }}">{{ $data->bidang->kode }} -
                                        {{ $data->bidang->nama_bidang }} - {{ $data->bidang->ruang }}</option>
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
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('aset.index') }}" data class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
