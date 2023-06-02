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
    <div class="s131">
        <form method="GET" action="cari">
            {{-- <div class="input-field first-wrap"> --}}
            <input id="id" name="cari" type="text" placeholder="What are you looking for?" hidden />
            {{-- </div> --}}
            <div class="row" style="justify-content: center">
                <div class="col-6">
                    <div id="reader" width="600px"></div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">SEARCH</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- </body> --}}
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="{{ asset('search') }}/js/extention/choices.js"></script>
    <script>
        const choices = new Choices('[data-trigger]', {
            searchEnabled: false
        });
    </script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            // console.log(`Code matched = ${decodedText}`, decodedResult);
            var id = `${decodedText}`;
            // document.getElementById('form').action = "/" + id;
            // console.log(id);
            document.getElementById("id").value = id;
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            // console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
