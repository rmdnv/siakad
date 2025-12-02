<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin — Tracer Study</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --primary: #009049;
      --primary-dark: #007d3b;
      --primary-light: #e8f7ef;
      --secondary: #6366f1;
      --dark: #1f2937;
      --light: #f9fafb;
      --gray: #6b7280;
      --success: #10b981;
      --warning: #f59e0b;
      --danger: #ef4444;
    }

    body {
      background: linear-gradient(135deg, #f5f7fa 0%, #f0f4f8 100%);
      color: var(--dark);
      font-family: 'Inter', sans-serif;
      min-height: 100vh;
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
      border-radius: 16px;
      padding: 1.5rem;
      transition: all 0.3s ease;
    }

    .glass-card:hover {
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.08);
      transform: translateY(-2px);
    }

    .stat-card {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.9) 100%);
      border-radius: 16px;
      padding: 1.5rem;
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.04);
    }

    .stat-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 6px;
      height: 100%;
      background: linear-gradient(to bottom, var(--primary), var(--primary-dark));
    }

    .status-badge {
      font-weight: 600;
      padding: 0.35rem 0.9rem;
      border-radius: 50px;
      font-size: 0.75rem;
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
    }

    .table-header {
      background: linear-gradient(to right, #f8fafc, #f1f5f9);
      font-weight: 600;
      color: var(--dark);
      border-bottom: 2px solid #e2e8f0;
    }

    .table-row {
      transition: all 0.2s ease;
      border-bottom: 1px solid #f1f5f9;
    }

    .table-row:hover {
      background-color: rgba(0, 144, 73, 0.03);
      transform: translateX(4px);
    }

    input, select {
      background-color: rgba(255, 255, 255, 0.9);
      border: 1.5px solid #e5e7eb;
      color: var(--dark);
      transition: all 0.2s ease;
    }

    input:focus, select:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(0, 144, 73, 0.15);
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      font-weight: 600;
      border-radius: 10px;
      padding: 0.6rem 1.2rem;
      transition: all 0.2s ease;
      cursor: pointer;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: white;
      border: none;
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, var(--primary-dark), #00662f);
      box-shadow: 0 4px 12px rgba(0, 144, 73, 0.3);
      transform: translateY(-2px);
    }

    .btn-secondary {
      background: white;
      color: var(--dark);
      border: 1.5px solid #e5e7eb;
    }

    .btn-secondary:hover {
      background: #f9fafb;
      border-color: var(--primary);
      color: var(--primary);
    }

    .btn-danger {
      background: linear-gradient(135deg, var(--danger), #dc2626);
      color: white;
      border: none;
    }

    .btn-danger:hover {
      background: linear-gradient(135deg, #dc2626, #b91c1c);
      box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
      transform: translateY(-2px);
    }

    .pagination-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.2s ease;
      background: white;
      border: 1.5px solid #e5e7eb;
      color: var(--dark);
    }

    .pagination-btn:hover, .pagination-btn.active {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: white;
      border-color: var(--primary);
    }

    .chart-container {
      background: white;
      border-radius: 16px;
      padding: 1.5rem;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
      border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .summary-card {
      background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
      border-radius: 16px;
      padding: 1.5rem;
      border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .sidebar-icon {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 12px;
      background: var(--primary-light);
      color: var(--primary);
      font-size: 1.2rem;
    }

    .progress-bar {
      height: 8px;
      border-radius: 4px;
      background: #e5e7eb;
      overflow: hidden;
    }

    .progress-fill {
      height: 100%;
      background: linear-gradient(90deg, var(--primary), var(--primary-dark));
      border-radius: 4px;
      transition: width 0.5s ease;
    }
  </style>
</head>

<body class="min-h-screen">
  <div class="container mx-auto px-4 py-8 max-w-7xl">
    
    <!-- Header -->
    <header class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 mb-8">
      <div class="flex items-center gap-4">
        <div class="sidebar-icon">
          <i class="fas fa-chart-line"></i>
        </div>
        <div>
          <h1 class="text-2xl font-bold text-gray-900">Tracer Study Dashboard</h1>
          <p class="text-gray-500 mt-1">
            Selamat Datang,
            <span class="font-semibold text-[#009049]">
              {{ \App\Helpers\NamaHelper::singkatNama(session()->has('admin_nama') ? session('admin_nama') : session('tracer_study_name')) }}
            </span>
            <span class="text-gray-400 ml-2">• Admin Panel</span>
          </p>
        </div>
      </div>

      <div class="flex flex-wrap items-center gap-3">
        <form method="GET" class="flex flex-wrap gap-3 items-center">
          <div class="relative">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            <input type="text" name="search" value="{{ request('search') }}" 
                   placeholder="Cari NISN / Nama..."
                   class="pl-10 pr-4 py-2.5 rounded-xl border focus:ring-2 focus:ring-[#009049]/20 w-full md:w-64">
          </div>
          
          <div class="relative">
            <i class="fas fa-filter absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            <select name="status" class="pl-10 pr-8 py-2.5 rounded-xl border focus:ring-2 focus:ring-[#009049]/20 appearance-none">
              <option value="">Semua Status</option>
              <option value="Belum Mengisi" {{ request('status')=='Belum Mengisi' ? 'selected' : '' }}>Belum Mengisi</option>
              <option value="Sedang Mengisi" {{ request('status')=='Sedang Mengisi' ? 'selected' : '' }}>Sedang Mengisi</option>
              <option value="Selesai Mengisi" {{ request('status')=='Selesai Mengisi' ? 'selected' : '' }}>Selesai Mengisi</option>
            </select>
            <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
          </div>
          
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-sliders-h"></i>
            <span>Filter</span>
          </button>
        </form>

        <form method="GET" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </button>
        </form>
      </div>
    </header>

    <!-- Statistic Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <div class="stat-card">
        <div class="flex justify-between items-start">
          <div>
            <p class="text-gray-500 text-sm font-medium">Selesai Mengisi</p>
            <p class="text-3xl font-bold text-gray-900 mt-2">{{ $selesai }}</p>
          </div>
          <div class="p-3 rounded-full bg-green-50 text-green-600">
            <i class="fas fa-check-circle text-xl"></i>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-xs text-gray-500 flex justify-between mb-1">
            <span>Progress</span>
            <span>{{ $persen }}%</span>
          </div>
          <div class="progress-bar">
            <div class="progress-fill" style="width: {{ $persen }}%"></div>
          </div>
        </div>
      </div>
      
      <div class="stat-card">
        <div class="flex justify-between items-start">
          <div>
            <p class="text-gray-500 text-sm font-medium">Sedang Mengisi</p>
            <p class="text-3xl font-bold text-gray-900 mt-2">{{ $sedang }}</p>
          </div>
          <div class="p-3 rounded-full bg-yellow-50 text-yellow-600">
            <i class="fas fa-clock text-xl"></i>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-xs text-gray-500">Dalam proses pengisian</div>
        </div>
      </div>
      
      <div class="stat-card">
        <div class="flex justify-between items-start">
          <div>
            <p class="text-gray-500 text-sm font-medium">Target Mengisi</p>
            <p class="text-3xl font-bold text-gray-900 mt-2">{{ $target }}</p>
          </div>
          <div class="p-3 rounded-full bg-blue-50 text-blue-600">
            <i class="fas fa-bullseye text-xl"></i>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-xs text-gray-500">Total target peserta</div>
        </div>
      </div>
      
      <div class="stat-card">
        <div class="flex justify-between items-start">
          <div>
            <p class="text-gray-500 text-sm font-medium">Persentase Selesai</p>
            <p class="text-3xl font-bold text-gray-900 mt-2">{{ $persen }}%</p>
          </div>
          <div class="p-3 rounded-full bg-purple-50 text-purple-600">
            <i class="fas fa-chart-pie text-xl"></i>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-xs text-gray-500">Dari total target</div>
        </div>
      </div>
    </div>

    <!-- Filter & Actions Bar -->
    <div class="glass-card flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
      <div class="flex items-center gap-3">
        <div class="flex items-center gap-2 text-sm">
          <i class="fas fa-table text-gray-400"></i>
          <label for="per_page" class="text-gray-600 font-medium">Tampilkan</label>
          <form method="GET" id="perPageForm" class="inline">
            <select name="per_page" id="per_page" 
                    class="rounded-lg px-3 py-1.5 border border-gray-300 focus:ring-2 focus:ring-[#009049]/20"
                    onchange="document.getElementById('perPageForm').submit()">
              <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
              <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
              <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
              <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
            </select>
          </form>
          <span class="text-gray-500">data per halaman</span>
        </div>
      </div>

      <div class="flex items-center gap-3">
        <a href="{{ route('tracer.export.csv', request()->all()) }}"
           class="btn btn-primary">
          <i class="fas fa-file-csv"></i>
          <span>Export CSV</span>
        </a>
        
        <button class="btn btn-secondary">
          <i class="fas fa-print"></i>
          <span>Cetak Laporan</span>
        </button>
      </div>
    </div>

    <!-- Table -->
    <div class="glass-card overflow-hidden mb-6">
      <div class="overflow-x-auto rounded-xl">
        <table class="min-w-full text-sm">
          <thead class="table-header">
            <tr>
              <th class="py-4 px-6 text-left rounded-tl-xl">No</th>
              <th class="py-4 px-6 text-left">NIS</th>
              <th class="py-4 px-6 text-left">NISN</th>
              <th class="py-4 px-6 text-left">Nama</th>
              <th class="py-4 px-6 text-left">Status</th>
              <th class="py-4 px-6 text-left rounded-tr-xl">Terakhir Diperbarui</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($data as $i => $row)
              <tr class="table-row">
                <td class="py-4 px-6 text-gray-500 font-medium">{{ $data->firstItem() + $i }}</td>
                <td class="py-4 px-6 font-medium">{{ $row->nis }}</td>
                <td class="py-4 px-6 font-medium">{{ $row->nisn }}</td>
                <td class="py-4 px-6">
                  <a href="{{ route('tracer.detail', $row->id) }}" 
                     class="font-semibold text-gray-900 hover:text-[#009049] transition-colors duration-200 flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-[#009049]/10 flex items-center justify-center text-[#009049] text-sm font-bold">
                      {{ substr($row->nama, 0, 1) }}
                    </div>
                    <span>{{ strtoupper($row->nama) }}</span>
                    <i class="fas fa-external-link-alt text-xs text-gray-400"></i>
                  </a>
                </td>
                <td class="py-4 px-6">
                  @php
                    $cls = $row->status == 'Belum Mengisi'
                        ? 'bg-gray-100 text-gray-700'
                        : ($row->status == 'Sedang Mengisi'
                            ? 'bg-yellow-50 text-yellow-700'
                            : 'bg-green-50 text-green-700');
                    $icon = $row->status == 'Belum Mengisi'
                        ? 'fas fa-times-circle'
                        : ($row->status == 'Sedang Mengisi'
                            ? 'fas fa-clock'
                            : 'fas fa-check-circle');
                  @endphp
                  <span class="status-badge {{ $cls }}">
                    <i class="{{ $icon }}"></i>
                    {{ $row->status }}
                  </span>
                </td>
                <td class="py-4 px-6 text-gray-500">
                  <div class="flex items-center gap-2">
                    <i class="fas fa-clock text-gray-400"></i>
                    {{ $row->updated_at->diffForHumans() }}
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="6" class="text-center py-12">
                  <div class="flex flex-col items-center justify-center text-gray-400">
                    <i class="fas fa-database text-4xl mb-3"></i>
                    <p class="text-lg font-medium">Tidak ada data ditemukan</p>
                    <p class="text-sm mt-1">Coba ubah filter pencarian Anda</p>
                  </div>
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

    <!-- Custom Pagination -->
    @if($data->hasPages())
    <div class="flex justify-center items-center gap-2 mb-10">
      <div class="flex items-center gap-2 bg-white rounded-xl p-2 shadow-sm border border-gray-200">
        {{-- Previous Page Link --}}
        @if($data->onFirstPage())
          <span class="pagination-btn opacity-50 cursor-not-allowed">
            <i class="fas fa-chevron-left"></i>
          </span>
        @else
          <a href="{{ $data->previousPageUrl() }}" class="pagination-btn hover:bg-gray-50">
            <i class="fas fa-chevron-left"></i>
          </a>
        @endif

        {{-- Pagination Elements --}}
        @php
          $current = $data->currentPage();
          $last = $data->lastPage();
          $start = max(1, $current - 2);
          $end = min($last, $current + 2);
        @endphp

        {{-- First Page Link --}}
        @if($start > 1)
          <a href="{{ $data->url(1) }}" class="pagination-btn">1</a>
          @if($start > 2)
            <span class="px-2 text-gray-400">...</span>
          @endif
        @endif

        {{-- Page Number Links --}}
        @for($i = $start; $i <= $end; $i++)
          @if($i == $current)
            <span class="pagination-btn active">{{ $i }}</span>
          @else
            <a href="{{ $data->url($i) }}" class="pagination-btn">{{ $i }}</a>
          @endif
        @endfor

        {{-- Last Page Link --}}
        @if($end < $last)
          @if($end < $last - 1)
            <span class="px-2 text-gray-400">...</span>
          @endif
          <a href="{{ $data->url($last) }}" class="pagination-btn">{{ $last }}</a>
        @endif

        {{-- Next Page Link --}}
        @if($data->hasMorePages())
          <a href="{{ $data->nextPageUrl() }}" class="pagination-btn hover:bg-gray-50">
            <i class="fas fa-chevron-right"></i>
          </a>
        @else
          <span class="pagination-btn opacity-50 cursor-not-allowed">
            <i class="fas fa-chevron-right"></i>
          </span>
        @endif
      </div>
      
      <div class="text-sm text-gray-500 ml-4">
        Menampilkan {{ $data->firstItem() ?? 0 }} - {{ $data->lastItem() ?? 0 }} dari {{ $data->total() }} data
      </div>
    </div>
    @endif

    <!-- Chart & Summary Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <div class="lg:col-span-2 chart-container">
        <div class="flex justify-between items-center mb-6">
          <div>
            <h3 class="text-lg font-bold text-gray-900">Statistik Pengisian Tracer Study</h3>
            <p class="text-gray-500 text-sm mt-1">Grafik perkembangan pengisian berdasarkan status</p>
          </div>
          <div class="flex gap-2">
            <button class="px-3 py-1.5 text-xs font-medium rounded-lg bg-gray-100 text-gray-700">Minggu ini</button>
            <button class="px-3 py-1.5 text-xs font-medium rounded-lg bg-[#009049] text-white">Bulan ini</button>
            <button class="px-3 py-1.5 text-xs font-medium rounded-lg bg-gray-100 text-gray-700">Tahun ini</button>
          </div>
        </div>
        <div class="h-80">
          {!! $statusChart->container() !!}
        </div>
      </div>
      
      <div class="summary-card">
        <div class="flex items-center gap-3 mb-6">
          <div class="p-3 rounded-xl bg-[#009049]/10 text-[#009049]">
            <i class="fas fa-chart-bar"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-gray-900">Ringkasan Data</h3>
            <p class="text-gray-500 text-sm">Statistik lengkap pengisian tracer study</p>
          </div>
        </div>
        
        <div class="space-y-5">
          <div class="flex items-center justify-between p-3 bg-white rounded-xl border border-gray-100">
            <div class="flex items-center gap-3">
              <div class="p-2 rounded-lg bg-green-50 text-green-600">
                <i class="fas fa-check"></i>
              </div>
              <div>
                <p class="font-medium text-gray-700">Selesai Mengisi</p>
                <p class="text-xs text-gray-500">{{ $selesai }} peserta</p>
              </div>
            </div>
            <span class="font-bold text-gray-900">{{ $selesai }}</span>
          </div>
          
          <div class="flex items-center justify-between p-3 bg-white rounded-xl border border-gray-100">
            <div class="flex items-center gap-3">
              <div class="p-2 rounded-lg bg-yellow-50 text-yellow-600">
                <i class="fas fa-spinner"></i>
              </div>
              <div>
                <p class="font-medium text-gray-700">Sedang Mengisi</p>
                <p class="text-xs text-gray-500">Dalam proses</p>
              </div>
            </div>
            <span class="font-bold text-gray-900">{{ $sedang }}</span>
          </div>
          
          <div class="flex items-center justify-between p-3 bg-white rounded-xl border border-gray-100">
            <div class="flex items-center gap-3">
              <div class="p-2 rounded-lg bg-blue-50 text-blue-600">
                <i class="fas fa-bullseye"></i>
              </div>
              <div>
                <p class="font-medium text-gray-700">Target Total</p>
                <p class="text-xs text-gray-500">Seluruh peserta</p>
              </div>
            </div>
            <span class="font-bold text-gray-900">{{ $target }}</span>
          </div>
          
          <div class="flex items-center justify-between p-3 bg-white rounded-xl border border-gray-100">
            <div class="flex items-center gap-3">
              <div class="p-2 rounded-lg bg-purple-50 text-purple-600">
                <i class="fas fa-percentage"></i>
              </div>
              <div>
                <p class="font-medium text-gray-700">Persentase Selesai</p>
                <p class="text-xs text-gray-500">Dari target total</p>
              </div>
            </div>
            <span class="font-bold text-gray-900">{{ $persen }}%</span>
          </div>
        </div>
        
        <div class="mt-6 pt-6 border-t border-gray-200">
          <div class="flex items-center justify-between text-sm">
            <span class="text-gray-500">Last Updated</span>
            <span class="font-medium text-gray-900">{{ now()->format('d M Y, H:i') }}</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="mt-10 pt-6 border-t border-gray-200 text-center text-gray-500 text-sm">
      <p>© {{ date('Y') }} Tracer Study Dashboard • Sistem Monitoring Alumni • v2.0</p>
      <p class="mt-1">Dibangun dengan <i class="fas fa-heart text-red-400 mx-1"></i> untuk kemajuan pendidikan</p>
    </footer>
  </div>

  <!-- Larapex Chart Script -->
  <script src="{{ LarapexChart::cdn() }}"></script>
  {{ $statusChart->script() }}

  <script>
    // Menambahkan efek interaktif pada tabel
    document.addEventListener('DOMContentLoaded', function() {
      // Efek hover pada baris tabel
      const tableRows = document.querySelectorAll('.table-row');
      tableRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
          this.style.transform = 'translateX(4px)';
        });
        row.addEventListener('mouseleave', function() {
          this.style.transform = 'translateX(0)';
        });
      });
      
      // Update waktu real-time
      function updateTime() {
        const timeElements = document.querySelectorAll('.last-updated-time');
        const now = new Date();
        const formattedTime = now.toLocaleDateString('id-ID', { 
          weekday: 'long', 
          year: 'numeric', 
          month: 'long', 
          day: 'numeric',
          hour: '2-digit',
          minute: '2-digit'
        });
        
        timeElements.forEach(el => {
          el.textContent = formattedTime;
        });
      }
      
      // Update waktu setiap menit
      updateTime();
      setInterval(updateTime, 60000);
      
      // Filter form submission dengan loading state
      const filterForm = document.querySelector('form[method="GET"]');
      const filterButton = filterForm.querySelector('button[type="submit"]');
      
      filterForm.addEventListener('submit', function(e) {
        const originalText = filterButton.innerHTML;
        filterButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Memfilter...</span>';
        filterButton.disabled = true;
        
        setTimeout(() => {
          filterButton.innerHTML = originalText;
          filterButton.disabled = false;
        }, 1000);
      });
    });
  </script>

  <style>
    #{{ $statusChart->id }} {
      width: 100% !important;
      height: 100% !important;
    }

    .apexcharts-canvas {
      max-width: 100% !important;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }
    
    ::-webkit-scrollbar-track {
      background: #f1f5f9;
      border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb {
      background: #cbd5e1;
      border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
      background: #94a3b8;
    }
    
    /* Animation for progress bars */
    @keyframes fillProgress {
      from { width: 0; }
      to { width: var(--progress-width); }
    }
    
    .progress-fill {
      animation: fillProgress 1s ease-out;
    }
  </style>
</body>
</html>