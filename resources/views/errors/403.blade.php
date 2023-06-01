<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Masalah Hak Akses</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/dist/img/logo.png">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <!-- Font Awesome Icon -->
    <link type="text/css" rel="stylesheet" href="{{ asset('erorr') }}/css/font-awesome.min.css" />
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('erorr') }}/css/style.css" />
</head>

<body>

    <div id="notfound">
        <div class="notfound-bg"></div>
        <div class="notfound">
            <div class="notfound-404">
                <h1>403</h1>
            </div>
            <h2>Anda Tidak Memiliki Hak Akses</h2>
            <a href="{{ route('home') }}">kembali Ke Home</a>
        </div>
    </div>

</body>

</html>
