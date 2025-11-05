<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin — Tracer Study</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      background: #f5f5f5;
      color: #374151;
      font-family: 'Inter', sans-serif;
    }

    .card {
      background: #ffffff;
      border: 1px solid #e5e7eb;
      border-radius: 0.75rem;
      padding: 1rem;
    }

    .link {
      color: #00823f;
      font-weight: 600;
    }

    .link:hover {
      text-decoration: underline;
    }

    .status-badge {
      font-weight: 600;
      padding: 0.25rem 0.6rem;
      border-radius: 9999px;
      font-size: 0.8rem;
    }

    .thead-light {
      background: #fafafa;
      font-weight: 600;
    }

    input,
    select {
      background-color: #fff;
      border: 1px solid #d1d5db;
      color: #374151;
    }

    input:focus,
    select:focus {
      outline: none;
      border-color: #009049;
      box-shadow: 0 0 0 2px #00904920;
    }

    button {
      transition: background-color 0.2s ease;
    }

    .btn-green {
      background-color: #009049;
      color: white;
    }

    .btn-green:hover {
      background-color: #007d3b;
    }

    .btn-red {
      background-color: #dc2626;
      color: white;
    }

    .btn-red:hover {
      background-color: #b91c1c;
    }

    table {
      border-collapse: separate;
      border-spacing: 0;
      width: 100%;
    }

    th,
    td {
      padding: 0.75rem 1rem;
      text-align: left;
    }
  </style>
</head>

<body class="min-h-screen">
  <div class="container mx-auto px-4 py-6">

    <!-- Header -->
    <header class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-10 h-10 rounded-md border">
        <div>
          <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
          <p class="text-sm text-gray-500">
            Selamat Datang,
            <span class="font-semibold text-[#009049]">
              {{ \App\Helpers\NamaHelper::singkatNama(session()->has('admin_nama') ? session('admin_nama') : session('tracer_study_name')) }}
            </span>
          </p>
        </div>
      </div>

      <div class="flex flex-wrap items-center gap-2">
        <form method="GET" class="flex flex-wrap gap-2">
          <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari NISN / Nama..."
            class="rounded-md px-3 py-2 text-sm w-48 md:w-60 focus:ring focus:ring-[#009049]/20">
          <select name="status" class="rounded-md px-3 py-2 text-sm">
            <option value="">-- Semua Status --</option>
            <option value="Belum Mengisi" {{ request('status')=='Belum Mengisi' ? 'selected' : '' }}>Belum Mengisi</option>
            <option value="Sedang Mengisi" {{ request('status')=='Sedang Mengisi' ? 'selected' : '' }}>Sedang Mengisi</option>
            <option value="Selesai Mengisi" {{ request('status')=='Selesai Mengisi' ? 'selected' : '' }}>Selesai Mengisi</option>
          </select>
          <button type="submit" class="btn-green px-4 py-2 rounded-md text-sm font-medium">Filter</button>
        </form>

        <form method="GET" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn-red px-4 py-2 rounded-md text-sm font-medium">
            Logout
          </button>
        </form>
      </div>
    </header>

    <!-- Statistic Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
      <div class="card">
        <p class="text-sm text-gray-500">Selesai Mengisi</p>
        <p class="text-2xl font-semibold mt-1 text-gray-800">{{ $selesai }}</p>
      </div>
      <div class="card">
        <p class="text-sm text-gray-500">Sedang Mengisi</p>
        <p class="text-2xl font-semibold mt-1 text-gray-800">{{ $sedang }}</p>
      </div>
      <div class="card">
        <p class="text-sm text-gray-500">Target Mengisi</p>
        <p class="text-2xl font-semibold mt-1 text-gray-800">{{ $target }}</p>
      </div>
      <div class="card">
        <p class="text-sm text-gray-500">Persentase Selesai</p>
        <p class="text-2xl font-semibold mt-1 text-gray-800">{{ $persen }}%</p>
      </div>
    </div>

    <!-- Filter & Actions -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-4">
      <div class="flex items-center gap-2 text-sm">
        <label for="per_page" class="text-gray-600">Tampilkan</label>
        <form method="GET" id="perPageForm" class="inline">
          <select name="per_page" id="per_page" class="rounded-md px-2 py-1 border border-gray-300"
            onchange="document.getElementById('perPageForm').submit()">
            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
            <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
            <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
          </select>
          <span class="text-gray-500 ml-1">data</span>
        </form>
      </div>

      <a href="{{ route('tracer.export.csv', request()->all()) }}"
        class="btn-green px-4 py-2 rounded-md text-sm font-medium">Unduh CSV</a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow border border-gray-200">
      <table class="min-w-full text-sm">
        <thead class="thead-light text-gray-700">
          <tr>
            <th>#</th>
            <th>NIS</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @forelse ($data as $i => $row)
            <tr class="hover:bg-gray-50">
              <td>{{ $data->firstItem() + $i }}</td>
              <td>{{ $row->nis }}</td>
              <td>{{ $row->nisn }}</td>
              <td class="font-semibold">
                <a href="{{ route('tracer.detail', $row->id) }}" class="link">
                  {{ strtoupper($row->nama) }}
                </a>
              </td>
              <td>
                @php
                  $cls = $row->status == 'Belum Mengisi'
                      ? 'bg-gray-100 text-gray-700'
                      : ($row->status == 'Sedang Mengisi'
                          ? 'bg-yellow-50 text-yellow-700'
                          : 'bg-green-50 text-green-700');
                @endphp
                <span class="status-badge {{ $cls }}">{{ $row->status }}</span>
              </td>
              <td class="text-gray-600">{{ $row->updated_at->diffForHumans() }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="6" class="text-center py-6 text-gray-500">Tidak ada data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
      {{ $data->withQueryString()->links() }}
    </div>

    <!-- Chart -->
    <div class="mt-6 grid grid-cols-1 lg:grid-cols-3 gap-4">
      <div class="col-span-2 card">
        {!! $statusChart->container() !!}
      </div>
      <div class="card">
        <h3 class="text-sm font-semibold text-gray-700 mb-2">Ringkasan</h3>
        <div class="text-sm text-gray-600 space-y-2">
          <div class="flex justify-between"><span>Selesai:</span><span class="font-semibold">{{ $selesai }}</span></div>
          <div class="flex justify-between"><span>Sedang Mengisi:</span><span class="font-semibold">{{ $sedang }}</span></div>
          <div class="flex justify-between"><span>Target:</span><span class="font-semibold">{{ $target }}</span></div>
          <div class="flex justify-between"><span>Persentase:</span><span class="font-semibold">{{ $persen }}%</span></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Larapex Chart Script -->
<script src="{{ LarapexChart::cdn() }}"></script>
{{ $statusChart->script() }}

<style>
  #{{ $statusChart->id }} {
    width: 100% !important;
    height: 100% !important;
  }

  .apexcharts-canvas {
    max-width: 100% !important;
  }
</style>
</body>
</html>
