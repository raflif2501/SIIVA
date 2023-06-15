@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Aset Berdasarkan Kategori</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Kategori</th>
                                    <th>Jumlah Aset</th>
                                    <th>Total Harga Aset</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            @php
                                function str($rupiah)
                                {
                                    $rp = 'Rp ' . number_format($rupiah, 2, ',', '.');
                                    return $rp;
                                }
                            @endphp
                            <tbody>
                                @foreach ($data as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->kode }}</td>
                                        <td>{{ $p->kategori }}</td>
                                        @if ($p->id == '1')
                                            <td>{{ $satu }}</td>
                                        @elseif ($p->id == '2')
                                            <td>{{ $dua }}</td>
                                        @elseif ($p->id == '3')
                                            <td>{{ $tiga }}</td>
                                        @elseif ($p->id == '4')
                                            <td>{{ $empat }}</td>
                                        @elseif ($p->id == '5')
                                            <td>{{ $lima }}</td>
                                        @elseif ($p->id == '6')
                                            <td>{{ $enam }}</td>
                                        @elseif ($p->id == '7')
                                            <td>{{ $tujuh }}</td>
                                        @elseif ($p->id == '8')
                                            <td>{{ $delapan }}</td>
                                        @elseif ($p->id == '9')
                                            <td>{{ $sembilan }}</td>
                                        @endif
                                        @if ($p->id == '1')
                                            <td>{{ str($hsatu) }}</td>
                                        @elseif ($p->id == '2')
                                            <td>{{ str($hdua) }}</td>
                                        @elseif ($p->id == '3')
                                            <td>{{ str($htiga) }}</td>
                                        @elseif ($p->id == '4')
                                            <td>{{ str($hempat) }}</td>
                                        @elseif ($p->id == '5')
                                            <td>{{ str($hlima) }}</td>
                                        @elseif ($p->id == '6')
                                            <td>{{ str($henam) }}</td>
                                        @elseif ($p->id == '7')
                                            <td>{{ str($htujuh) }}</td>
                                        @elseif ($p->id == '8')
                                            <td>{{ str($hdelapan) }}</td>
                                        @elseif ($p->id == '9')
                                            <td>{{ str($hsembilan) }}</td>
                                        @endif
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
    @include('kategori.scriptDelete')
@endsection
