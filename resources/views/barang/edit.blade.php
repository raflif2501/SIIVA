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
                                <label>Kode Barang</label>
                                <input type="text" name="kode_barang"
                                    class="form-control @error('kode_barang') is-invalid @enderror"
                                    placeholder="{{ $data->kode_barang }}" value="{{ $data->kode_barang }}">
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
                                    placeholder="Masukkan Nama Aset" value="{{ $data->nama_barang }}">
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
                                    placeholder="Masukkan Merk / Type" value="{{ $data->merktype }}">
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
                                    placeholder="Masukkan Status Kepemilikan" value="{{ $data->status }}">
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
                                    placeholder="Masukkan Kondisi Asset" value="{{ $data->kondisi }}">
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
                                    value="{{ $data->tahun }}">
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
                                    placeholder="Masukkan Sumber Aset" value="{{ $data->sumber }}">
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
                                <label>ID Kategori</label>
                                <select class="form-control" name="bidang_id">
                                    <option value="{{ $data->kategori_id }}">{{ $data->kategori->kode }} -
                                        {{ $data->kategori->kategori }}
                                    </option>
                                    @foreach ($data1 as $p)
                                        <option value="{{ $p->id }}">{{ $p->kode }} - {{ $p->kategori }}
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
                                        <option value="{{ $p->id }}">{{ $p->kode }} - {{ $p->nama_bidang }} -
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
