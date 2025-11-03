<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Charset -->
    <meta charset="UTF-8" />

    <!-- Title -->
    <title>Dashboard Admin — Tracer Study</title>

    <!-- Viewport: responsif -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">

    <!-- Mobile / PWA -->
    <meta name="theme-color" content="#0f172a">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Custom styles -->
    <style>
        :root {
            --bg-1: #021a17;
            --bg-2: #043c31;
            --accent: #8bff78;
            --muted: #cfd9d5;
        }

        body {
            background: linear-gradient(180deg, var(--bg-1) 0%, var(--bg-2) 80%);
            color: #f0fff4;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .glass {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
            transition: all .3s ease;
        }

        .neon-hover:hover {
            box-shadow: 0 6px 35px rgba(139, 255, 120, 0.25),
                0 0 25px rgba(139, 255, 120, 0.15) inset;
            transform: translateY(-4px);
        }

        .thead-grad {
            background: linear-gradient(90deg, rgba(139, 255, 120, 0.15), rgba(255, 255, 255, 0.04));
            color: #e9fff0;
        }

        .link-underline {
            position: relative;
            color: var(--accent);
        }

        .link-underline::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -3px;
            height: 2px;
            width: 0;
            background: linear-gradient(90deg, var(--accent), #fff);
            transition: width .25s ease;
        }

        .link-underline:hover::after {
            width: 100%;
        }

        .status-badge {
            font-weight: 600;
            padding: .3rem .7rem;
            border-radius: 9999px;
            font-size: .8rem;
            backdrop-filter: blur(12px);
        }
    </style>
</head>

<body class="font-sans antialiased min-h-screen">
    <x-preloader />

    <div class="container mx-auto px-6 py-8">

        <!-- header -->
        <header class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6" data-aos="fade-down">
            <div class="flex items-center gap-4" data-aos="zoom-in">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center glass" data-aos="flip-left">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-9 h-9 object-contain">
                </div>
                <div data-aos="fade-right">
                    <h1 class="text-2xl md:text-3xl font-extrabold tracking-tight">DASHBOARD</h1>
                    <p class="text-sm text-gray-300/70">Selamat Datang,
                        <span class="text-[color:var(--accent)] font-semibold">{{ \App\Helpers\NamaHelper::singkatNama(session()->has('admin_nama') ? session('admin_nama') : session('tracer_study_name')) }}</span>
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap items-center gap-3" data-aos="fade-left">
                <!-- form search -->
                <form method="GET" class="flex gap-2 items-center">
                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="Cari NISN / Nama..."
                        class="px-3 py-2 rounded-lg glass border border-white/5 placeholder:text-gray-400 text-sm focus:outline-none focus:ring-2 focus:ring-[color:var(--accent)]" />
                    <select name="status"
                        class="px-3 py-2 rounded-lg glass border border-white/5 text-sm">
                        <option value="">-- Semua Status --</option>
                        <option value="Belum Mengisi" {{ request('status')=='Belum Mengisi' ? 'selected' : '' }}>Belum Mengisi</option>
                        <option value="Sedang Mengisi" {{ request('status')=='Sedang Mengisi' ? 'selected' : '' }}>Sedang Mengisi</option>
                        <option value="Selesai Mengisi" {{ request('status')=='Selesai Mengisi' ? 'selected' : '' }}>Selesai Mengisi</option>
                    </select>
                    <button type="submit"
                        class="px-4 py-2 rounded-lg bg-gradient-to-r from-emerald-500 to-lime-400 text-black font-semibold hover:opacity-95">Filter</button>
                </form>

                <!-- logout button -->
                <form method="GET" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="px-4 py-2 rounded-lg bg-gradient-to-r from-red-800 to-red-600 text-white font-semibold shadow-md 
         hover:from-red-900 hover:to-red-700">
                        Logout
                    </button>
                </form>
            </div>
        </header>

        <!-- statistic cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="p-4 rounded-xl glass neon-hover" data-aos="fade-down" data-aos-delay="300">
                <p class="text-sm font-semibold text-[color:var(--accent)]">Selesai Mengisi</p>
                <p class="text-2xl font-bold mt-2">{{ $selesai }}</p>
            </div>

            <div class="p-4 rounded-xl glass neon-hover" data-aos="fade-down" data-aos-delay="500">
                <p class="text-sm font-semibold text-yellow-300/90">Sedang Mengisi</p>
                <p class="text-2xl font-bold mt-2">{{ $sedang }}</p>
            </div>

            <div class="p-4 rounded-xl glass neon-hover" data-aos="fade-down" data-aos-delay="700">
                <p class="text-sm font-semibold text-gray-300/80">Target Mengisi</p>
                <p class="text-2xl font-bold mt-2">{{ $target }}</p>
            </div>

            <div class="p-4 rounded-xl glass neon-hover" data-aos="fade-down" data-aos-delay="900">
                <p class="text-sm font-semibold text-blue-200/90">Persentase Selesai</p>
                <p class="text-2xl font-bold mt-2">{{ $persen }}%</p>
            </div>
        </div>

        <!-- actions -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-4" data-aos="fade-right">
            <div class="flex items-center gap-3 text-sm" data-aos="fade-up">
                <label for="per_page" class="text-gray-300/80">Tampilkan</label>
                <form method="GET" id="perPageForm" class="inline">
                    <select name="per_page" id="per_page" class="px-2 py-1 rounded-md glass border border-white/5"
                        onchange="document.getElementById('perPageForm').submit()">
                        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                        <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                        <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                    </select>
                    <span class="text-gray-400 ml-2">data</span>
                </form>
            </div>

            <div class="flex items-center gap-3" data-aos="fade-left">
                <a href="{{ route('tracer.export.csv', request()->all()) }}"
                    class="px-4 py-2 rounded-lg bg-gradient-to-r from-emerald-500 to-lime-400 text-black font-semibold hover:opacity-95">
                    Unduh CSV
                </a>
            </div>
        </div>

        <!-- table -->
        <div class="overflow-hidden rounded-xl glass shadow-lg" data-aos="fade-down" data-aos-delay="500">
            <table class="min-w-full w-full text-sm">
                <thead class="thead-grad">
                    <tr class="text-left text-xs uppercase">
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">NIS</th>
                        <th class="px-4 py-3">NISN</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Updated</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @forelse ($data as $i => $row)
                    <tr class="hover:bg-white/2 transition-colors" data-aos="fade-right">
                        <td class="px-4 py-3">{{ $data->firstItem() + $i }}</td>
                        <td class="px-4 py-3">{{ $row->nis }}</td>
                        <td class="px-4 py-3">{{ $row->nisn }}</td>
                        <td class="px-4 py-3 font-semibold">
                            <a href="{{ route('tracer.detail', $row->id) }}"
                                class="link-underline text-[color:var(--accent)]">
                                {{ strtoupper($row->nama) }}
                            </a>
                        </td>
                        <td class="px-4 py-3">
                            @php
                            $bg = $row->status == 'Belum Mengisi'
                            ? 'bg-gray-700 text-gray-300'
                            : ($row->status == 'Sedang Mengisi'
                            ? 'bg-yellow-700 text-yellow-100'
                            : 'bg-emerald-800 text-emerald-100');
                            @endphp
                            <span class="status-badge {{ $bg }}">{{ $row->status }}</span>
                        </td>
                        <td class="px-4 py-3 text-gray-300/80">{{ $row->updated_at->diffForHumans() }}</td>
                    </tr>
                    @empty
                    <tr data-aos="fade-in">
                        <td colspan="6" class="text-center py-6 text-gray-400">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- pagination -->
        <div class="mt-4" data-aos="fade-up">
            {{ $data->withQueryString()->links() }}
        </div>

        <!-- chart area -->
        <div class="mt-6 grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div class="col-span-2 glass rounded-xl p-4" data-aos="fade-right">
                {!! $statusChart->container() !!}
            </div>

            <div class="glass rounded-xl p-4" data-aos="fade-left">
                <h3 class="text-sm font-semibold text-gray-200/90 mb-2">Ringkasan</h3>
                <div class="text-sm text-gray-300/80 space-y-2">
                    <div class="flex justify-between"><span>Selesai:</span><span
                            class="font-semibold">{{ $selesai }}</span></div>
                    <div class="flex justify-between"><span>Sedang Mengisi:</span><span
                            class="font-semibold">{{ $sedang }}</span></div>
                    <div class="flex justify-between"><span>Target:</span><span
                            class="font-semibold">{{ $target }}</span></div>
                    <div class="flex justify-between"><span>Persentase:</span><span
                            class="font-semibold">{{ $persen }}%</span></div>
                </div>
            </div>
        </div>

    </div>

    <!-- Larapex JS -->
    <script src="{{ LarapexChart::cdn() }}"></script>
    {{ $statusChart->script() }}

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false
        });
    </script>

</body>

</html>