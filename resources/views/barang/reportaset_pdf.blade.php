<!DOCTYPE html>
<html>

<head>
    <title>Report Aset Berdasarkan Kode Barang</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/dist/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        p {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 18px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
        }

        table tr td,
        table tr th {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 12px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 20px;
        }

        h6 {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
        }

        .content {
            margin-left: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-right: 20px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            max-height: 35rem;
        }
    </style>
    <center>
        <h5><b>Report Aset Berdasarkan Kode Barang</b></h5>
    </center>
    <div class="content">
        <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Register</th>
                        <th>Merk/Type</th>
                        <th>Harga</th>
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
                @foreach ($data as $p)
                    <tbody>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                {{ $p->kode_barang }}
                            </td>
                            <td>
                                @foreach ($data1 as $d)
                                    @if ($p->kode_barang == $d->kode_barang)
                                        {{ $d->nama_barang }}
                                        <br>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($data1 as $d)
                                    @if ($p->kode_barang == $d->kode_barang)
                                        {{ $d->register }}
                                        <br>
                                        @php
                                            $harga = $d->sum('harga');
                                        @endphp
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($data1 as $d)
                                    @if ($p->kode_barang == $d->kode_barang)
                                        {{ $d->merktype }}
                                        <br>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($data1 as $d)
                                    @if ($p->kode_barang == $d->kode_barang)
                                        {{ str($d->harga) }}
                                        <br>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                @endforeach
                <tbody>
                    <tr>
                        <td colspan="5" style="text-align: center">Total Harga</td>
                        <td>
                            {{ str($harga) }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="float: right">
            <p>Sumenep, {{ $today }}</p>
        </div>
    </div>
</body>

</html>
