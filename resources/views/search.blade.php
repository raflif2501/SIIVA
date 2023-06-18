<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SIIVA DINAS PU TATA RUANG Kabupaten Sumenep</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/dist/img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="{{ asset('search') }}/css/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 24px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            font-color: white;
            /* line-height: 50px; */
        }
    </style>
    <div class="s131">
        <div class="container-fluid-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">
                        <div class="inner-form">
                            <table>
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
                                            <td width=150px>Kode Barang</td>
                                            <td>: {{ $p->kode_barang }}</td>
                                        </tr>
                                        <tr>
                                            <td width=150px>Nama Barang</td>
                                            <td>: {{ $p->nama_barang }}</td>
                                        </tr>
                                        <tr>
                                            <td width=150px>Register</td>
                                            <td>: {{ $p->register }}</td>
                                        </tr>
                                        <tr>
                                            <td width=150px>Merk / Type</td>
                                            <td>: {{ $p->merktype }}</td>
                                        </tr>
                                        <tr>
                                            <td width=150px>Tahun</td>
                                            <td>: {{ $p->tahun }}</td>
                                        </tr>
                                        <tr>
                                            <td width=150px>Asal</td>
                                            <td>: {{ $p->asal }}</td>
                                        </tr>
                                        <tr>
                                            <td width=150px>Harga</td>
                                            <td>: {{ str($p->harga) }}</td>
                                        </tr>
                                        @if ($p->keterangan != null)
                                            <tr>
                                                <td width=150px>Keterangan</td>
                                                <td>: {{ $p->keterangan }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('search') }}/js/extention/choices.js"></script>
    <script>
        const choices = new Choices('[data-trigger]', {
            searchEnabled: false
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
