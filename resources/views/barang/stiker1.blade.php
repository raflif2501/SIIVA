<!DOCTYPE html>
<html>

<head>
    <title>Stiker Aset</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/dist/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body onload="window.print()">
    <style type="text/css">
        p {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 14px;
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
            /* line-height: 20px; */
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
    <div class="content">
        @foreach ($data as $p)
            <div class="row">
                <div class="col-sm-4">
                    <center>
                        <p>DINAS PU TATA RUANG KABUPATEN SUMENEP</p>
                    </center>
                    <div class="row">
                        <div class="col-sm-9">
                            <table id="example1" class="">
                                <tbody>
                                    <tr>
                                        <td width=75px;>Kode Barang</td>
                                        <td width=150px;>: {{ $p->kode_barang }}</td>
                                    </tr>
                                    <tr>
                                        <td width=75px;>Nama Barang</td>
                                        <td width=150px;>: {{ $p->nama_barang }}</td>
                                    </tr>
                                    <tr>
                                        <td width=75px;>Merk / Type</td>
                                        <td width=150px;>: {{ $p->merktype }}</td>
                                    </tr>
                                    <tr>
                                        <td width=75px;>Tahun</td>
                                        <td width=150px;>: {{ $p->tahun }}</td>
                                    </tr>
                                    <tr>
                                        <td width=75px;>Asal</td>
                                        <td width=150px;>: {{ $p->asal }}</td>
                                    </tr>
                                    @if ($nama != null)
                                        <tr>
                                            <td width=75px;>Pemegang</td>
                                            <td width=150px;>: {{ $nama }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-3">
                            <table id="example1" class="">
                                <tbody>
                                    <tr>
                                        <td> {{ QrCode::size(120)->generate($p->kode) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
