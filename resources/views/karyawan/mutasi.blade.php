@extends('layouts.app')
@section('title')
    {{ 'Data Karyawan Baru / Mutasi Tahun' }} {{ $tahun }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Karyawan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>NIP</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Jabatan</th>
                                    <th>Pangkat / Golongan Ruang</th>
                                    <th>Bidang</th>
                                    <th>Ruang</th>
                                    {{-- @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                        <th>Action</th>
                                    @endrole --}}
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($data as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->nik }}</td>
                                        <td>{{ $p->nip }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->jk }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->status }}</td>
                                        <td>{{ $p->jabatan }}</td>
                                        <td>{{ $p->pangkat }}</td>
                                        <td>{{ $p->bidang->nama_bidang }}</td>
                                        <td>{{ $p->bidang->ruang }}</td>
                                        {{-- <td>
                                            @role('admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR')
                                                <a href="{{ route('karyawan.edit', $p->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <input type="button" class="btn btn-sm btn-danger"
                                                    data-id="{{ $p->id }}" onclick="deleteData(this)" value="Delete">
                                            @endrole
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    @include('karyawan.scriptDelete')
@endsection
