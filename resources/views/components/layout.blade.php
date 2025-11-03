<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ $title ?? 'Questions' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
  <div class="max-w-4xl mx-auto py-6 px-4">
    <h1 class="text-2xl font-bold mb-6">{{ $title ?? '' }}</h1>

    @if(session('success'))
      <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
      </div>
    @endif

    {{-- Ini bagian konten --}}
    @yield('content')
  </div>
</body>
</html>
