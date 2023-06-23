<!DOCTYPE html>
<html>

<head>
    <title>Report Aset Berdasarkan Kategori</title>
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
        <h5><b>Report Aset Berdasarkan Kategori</b></h5>
    </center>
    <div class="content">
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
        <div style="float: right">
            <p>Sumenep, {{ $today }}</p>
        </div>
    </div>
</body>

</html>
