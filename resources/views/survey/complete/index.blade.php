<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SELESAI</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/tracer-study/dashboard/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body class="antialiased">
    <x-preloader />
    <div class="circle-blur circle1"></div>
    <div class="header">
        <nav>
            <div class="navbar">
                <div class="logo">
                    <a href="/tracer-study">
                        <img src="{{ asset('images/logo.png') }}" alt="logo">
                    </a>
                </div>
                <ul>
                    <li class="logout-hover">
                        <a href="/logout">{{ \App\Helpers\NamaHelper::singkatNama(strtoupper(session()->has('admin_nama') ? session('admin_nama') : session('tracer_study_name'))) }}</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="judul">
            <h2>TERIMA KASIH</h2>
        </div>
    </div>
</body>

</html>