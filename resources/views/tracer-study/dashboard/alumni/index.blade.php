<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

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
            <h2>SELAMAT DATANG,</h2>
            <h1>{{ \App\Helpers\NamaHelper::singkatNama(strtoupper(session()->has('admin_nama') ? session('admin_nama') : session('tracer_study_name'))) }}</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus velit ipsum, et scelerisque ligula pretium efficitur. Curabitur vitae feugiat nunc. Sed nec ligula nec tortor efficitur rutrum et dignissim mauris. Cras efficitur iaculis ullamcorper.</p>
            <a class="btn-mulai" href="{{ route("survey.stage.page", ['stage_id' => 1, 'page' => 1]) }}">Mulai Survey!</a>
        </div>
    </div>
</body>

</html>