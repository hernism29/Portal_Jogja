<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portal Pemerintah</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-image: url({{ ('img/yogyabg.jpg')}});
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #ffffff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
             <font size="10" color="#ffffff"><small>Portal Pemerintah</small></font><br>
             <font size="10" color="#ffffff"><strong>Kota Yogyakarta</strong></font><br>
             <font size="10" color="#ffffff"><small>Situs Resmi Pemerintahan Yogyakarta</small></font>

        <br><br><br>
         <div class="links">
            <a href="#">Aduan</a>
            <a href="#">Perizinan</a>
            <a href="#">Kecamatan & Kelurahan</a>
            <a href="#">CCTV</a>
            <a href="#">Berita</a>
            <br><br>
            <a href="#">Informasi</a>
            <a href="#">Gandeng Gendong</a>
            <a href="#">Peraturan Pelindungan</a>
            <a href="#">Lowongan Pekerjaan</a>
            <a href="#">Jogja Smart Service</a>
        </div>
    </div>
</div>
</body>
</html>
