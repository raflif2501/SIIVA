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
            line-height: 20px;
        }

        table tr td,
        table tr th {
            font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
            font-size: 18px;
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
    {{-- <img src="{{ public_path('loginn/images/kop.png') }}" alt="KOP PP MA" style="width:100%; height: auto">
    storage_path('app/public/dummy.jpg') --}}
    <center>
        <h6><b>PAKTA INTEGRITAS PEMANFAATAN BMD</b></h6>
        <h6><b> PEMERINTAH KABUPATEN SUMENEP</b></h6>
    </center>
    <div class="content">
        <p style="text-align: justify">Pada hari ini __________ tanggal __________________ bulan
            ____________ tahun Dua ribu dua puluh __________, saya
            yang bertanda tangan di
            bawah ini :</p>
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
                        <td width=150px;>Pangkat/Gol.Ruang</td>
                        <td>: {{ $p->karyawan->pangkat }}</td>
                    </tr>
                    <tr>
                        <td width=150px;>Jabatan </td>
                        <td>: {{ $p->karyawan->jabatan }}</td>
                    </tr>
                    <tr>
                        <td width=150px;>Unit Kerja</td>
                        <td>: Dinas Pekerjaan Umum Dan Tata Ruang Kabupaten Sumenep</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="content">
        @foreach ($data as $p)
            <p style="text-align: justify">Berkenaan dengan pemberian fasilitas Barang Milik Daerah Pemerintah Kabupaten
                Sumenep kepada saya sebagaimana tersebut dalam lampiran Keputusan Kepala Dinas Pekerjaan Umum Dan Tata
                Ruang
                Kabupaten Sumenep Nomor : {{ $p->surat }} Tahun 202_ Tentang Pengguna Barang Milik Daerah pada
                Dinas
                Pekerjaan Umum Dan Tata Ruang Kabupaten Sumenep, dengan ini menyatakan bahwa : </p>
        @endforeach
        <p style="text-align: justify">1. Saya akan menjaga aset yang saya manfaatkan ketika saya menjabat sebagai
            Pemegang dengan penuh tanggung jawab, termasuk bertanggung jawab apabila terjadi kerusakan atau kekurangan.
        </p>
        <p style="text-align: justify">2. Saya akan menggunakan sepenuhnya fasilitas Barang Milik Daerah tersebut untuk
            kelancaran pelaksanaan tugas dan fungsi pada Dinas Pekerjaan Umum Dan tata Ruang.</p>
        <p style="text-align: justify">3. Tidak akan menggadaikan dan/atau menjual, menghilangkan dan/atau merubah
            sebagian atau seluruhnya, serta memindahtangankan tanpa persetujuan pejabat pemberi fasilitas selaku
            Pengguna Barang Milik Daerah.</p>
        <p style="text-align: justify">4. Setelah menjalankan tugas sebagai pemegang, saya akan menyerahkan Kembali
            semua aset milik atau tercatat sebagai barang milik daerah yang bergerak maupun tidak bergerak serta semua
            yang digunakan dalam rangka membantu tugas jabatan.</p>
        <p style="text-align: justify">5. Pakta Integritas ini berlaku sebagai Surat Kuasa kepada Kepala Badan
            Pendapatan, Pengelolaan Keuangan dan Aset Daerah untuk menarik Kembali secara langsung Barang Milik Daerah
            bergerak dan tidak bergerak seketika saat saya tidak menjabat</p>
        <p style="text-align: justify">6. Apabila saya melanggar dari hal-hal yang dinyatakan dalam Pakta Integritas
            ini, bersedia menerima sanksi moral, sanksi administrasi, serta dituntut ganti rugi dan pidana sesuai
            Ketentuan dan Peraturan Perundang-Undangan yang berlaku.</p>
        <p style="text-align: justify">Demikian Pakta Integritas ini kami sampaikan dengan sebenar-benarnya, dengan
            penuh kesadaran tanpa ada paksaaan maupun tekanan dari Pihak manapun.</p>
    </div>
    <p></p>
    <div class="content">
        <table id="example1" class="">
            <tbody>
                <tr>
                    <td width=350px;></td>
                    <td width=180px>Sumenep, </td>
                    <td>202</td>
                </tr>
            </tbody>
        </table>
        <table id="example1" class="">
            <tbody>
                @foreach ($data as $p)
                    <tr style="text-align: center;">
                        <td width=300px;></td>
                        <td width=300px;>Yang Membuat Pernyataan </td>
                    </tr>
                    <br><br><br>
                    <tr style="text-align: center;">
                        <td width=300px;></td>
                        <td width=300px;><b><u>{{ $p->karyawan->nama }}</u></b></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td width=300px;></td>
                        <td width=300px;>NIP.{{ $p->karyawan->nip }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
