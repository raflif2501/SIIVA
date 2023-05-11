<!DOCTYPE html>
<html>

<head>
    <title>Surat Pernyataan</title>
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
            /* line-height: 20px; */
        }

        table tr td,
        table tr th {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 18px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 22px;
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
    {{-- <img src="{{ public_path('loginn/images/kop.png') }}" alt="KOP PP MA" style="width:100%; height: auto">
    storage_path('app/public/dummy.jpg') --}}
    <center>
        <h6><b><u>SURAT PERNYATAAN</u></b></h6>
    </center>
    <div class="content">
        <p>Saya yang bertanda tangan dibawah ini : </p>
        <table id="example1" class="">
            <tbody>
                @foreach ($data as $p)
                    <tr>
                        <td width=150px;>Nama </td>
                        <td>: <b>{{ $p->karyawan->nama }}</b></td>
                    </tr>
                    <tr>
                        <td width=150px;>NIP </td>
                        <td>: {{ $p->karyawan->nip }}</td>
                    </tr>
                    <tr>
                        <td width=150px;>Jabatan </td>
                        <td>: {{ $p->karyawan->jabatan }}</td>
                    </tr>
                    <tr>
                        <td width=150px;>Alamat</td>
                        <td>: {{ $p->karyawan->alamat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <center>
        <h6><b>MENYATAKAN</b></h6>
    </center>
    <div class="content">
        <p style="text-align: justify">1. Bahwa saya akan memenuhi / mentaati segala ketentuan - ketentuan yang
            tercantum di dalam
            penunjukan kendaraan dinas, dengan data sebagai berikut : </p>
        <table id="example1" class="">
            <tbody>
                @foreach ($data as $p)
                    <tr>
                        <td width=150px;>Jenis Kendaraan</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td width=150px;>Merk / Type</td>
                        <td>: {{ $p->barang->merktype }}</td>
                    </tr>
                    <tr>
                        <td width=150px;>Nomer Register </td>
                        <td>: {{ $p->barang->nopol }}</td>
                    </tr>
                    <tr>
                        <td width=150px;>Tahun Pembuatan</td>
                        <td>: {{ $p->barang->tahun }}</td>
                    </tr>
                    <tr>
                        <td width=150px;>Nomor Rangka</td>
                        <td>: {{ $p->barang->rangka }}</td>
                    </tr>
                    <tr>
                        <td width=150px;>Nomer Mesin</td>
                        <td>: {{ $p->barang->mesin }}</td>
                    </tr>
                    <tr>
                        <td width=150px;>Warna</td>
                        <td>: </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="content">
        <p style="text-align: justify">2. Apabila terjadi mutasi / keluar dari unit /satuan kerja atau sebab-sebab lain
            yang berkaitan dengan pemegang / penanggung jawab kendaraan dinas, maka saya berkewajiban
            menyerahkan kembali tanpa harus diminta kepada unit / satuan kerja serta tanpa tuntutan
            dalam bentuk apapun. </p>
        <p style="text-align: justify">Demikian Surat Pernyataan ini saya buat untuk menjadi periksa dan seperlunya.
        </p>
    </div>
    <div class="content">
        <table id="example1" class="">
            <tbody>
                <tr>
                    <td width=400px;></td>
                    <td width=180px>Sumenep, </td>
                    <td>202</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table id="example1" class="">
            <tbody>
                @foreach ($data as $p)
                    @foreach ($data1 as $p1)
                        <tr style="text-align: center;">
                            <td width=300px;>Mengetahui, </td>
                            <td width=300px;>Yang Membuat Pernyataan </td>
                        </tr>
                        <tr style="text-align: center;">
                            <td width=300px;>{{ $p1->jabatan }}</td>
                            <td width=300px;>{{ $p->karyawan->jabatan }}</td>
                        </tr>
                        <br><br><br>
                        <tr style="text-align: center;">
                            <td width=300px;><b><u>{{ $p1->nama }}</u></b></td>
                            <td width=300px;><b><u>{{ $p->karyawan->nama }}</u></b></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td width=300px;>{{ $p1->pangkat }}</td>
                            <td width=300px;>{{ $p->karyawan->pangkat }}</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td width=300px;>NIP.{{ $p1->nip }}</td>
                            <td width=300px;>NIP.{{ $p->karyawan->nip }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
