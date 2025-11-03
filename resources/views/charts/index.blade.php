<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Charts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold mb-6">All Charts Demo</h1>

    <div class="grid grid-cols-2 gap-6">
        <div class="bg-white p-4 rounded shadow">{{ $pie->container() }}</div>
        <div class="bg-white p-4 rounded shadow">{{ $donut->container() }}</div>
        <div class="bg-white p-4 rounded shadow">{{ $radial->container() }}</div>
        <div class="bg-white p-4 rounded shadow">{{ $polar->container() }}</div>
        <div class="bg-white p-4 rounded shadow">{{ $line->container() }}</div>
        <div class="bg-white p-4 rounded shadow">{{ $area->container() }}</div>
        <div class="bg-white p-4 rounded shadow">{{ $bar->container() }}</div>
        <div class="bg-white p-4 rounded shadow">{{ $hbar->container() }}</div>
        <div class="bg-white p-4 rounded shadow">{{ $heatmap->container() }}</div>
        <div class="bg-white p-4 rounded shadow">{{ $radar->container() }}</div>
    </div>

    <script src="{{ LarapexChart::cdn() }}"></script>
    {{ $pie->script() }}
    {{ $donut->script() }}
    {{ $radial->script() }}
    {{ $polar->script() }}
    {{ $line->script() }}
    {{ $area->script() }}
    {{ $bar->script() }}
    {{ $hbar->script() }}
    {{ $heatmap->script() }}
    {{ $radar->script() }}
</body>
</html>
    