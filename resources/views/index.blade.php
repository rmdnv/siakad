<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siakad - Sistem Akademik Terpadu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-dark text-white font-sans antialiased overflow-x-hidden selection:bg-primary selection:text-white">
    <x-preloader />
    
    <!-- Navbar -->
    <header class="fixed top-0 left-0 w-full z-50 transition-all duration-300 px-6 py-5 flex justify-between items-center" id="navbar">
        <div class="text-2xl font-bold tracking-tight">Siakad.</div>
        
        <nav class="hidden md:block bg-white/5 backdrop-blur-md border border-white/10 px-8 py-3 rounded-full">
            <ul class="flex gap-8">
                <li><a href="#" class="text-white/70 hover:text-white font-medium transition-colors relative group">Beranda<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span></a></li>
                <li><a href="/tracer-study" class="text-white/70 hover:text-white font-medium transition-colors relative group">BKK<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span></a></li>
                <li><a href="#" class="text-white/70 hover:text-white font-medium transition-colors relative group">Inventaris<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span></a></li>
                <li><a href="#" class="text-white/70 hover:text-white font-medium transition-colors relative group">PKL<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span></a></li>
            </ul>
        </nav>

        <a href="#tentang-kami" class="hidden md:inline-block bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-full font-semibold transition-all hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(168,85,247,0.3)]">Tentang Kami</a>

        <!-- Hamburger -->
        <button class="md:hidden flex flex-col gap-1.5 z-[60]" onclick="toggleMenu(this)">
            <span class="w-8 h-0.5 bg-white transition-transform origin-center"></span>
            <span class="w-8 h-0.5 bg-white transition-opacity"></span>
            <span class="w-8 h-0.5 bg-white transition-transform origin-center"></span>
        </button>

        <!-- Mobile Menu -->
        <div id="menu" class="fixed inset-0 bg-dark/95 backdrop-blur-xl z-50 flex justify-center items-center translate-x-full transition-transform duration-500">
            <ul class="flex flex-col gap-8 text-center">
                <li><a href="#" class="text-3xl font-bold hover:text-primary transition-colors">Beranda</a></li>
                <li><a href="/tracer-study" class="text-3xl font-bold hover:text-primary transition-colors">BKK</a></li>
                <li><a href="#" class="text-3xl font-bold hover:text-primary transition-colors">Inventaris</a></li>
                <li><a href="#" class="text-3xl font-bold hover:text-primary transition-colors">PKL</a></li>
                <li><a href="#tentang-kami" class="text-3xl font-bold hover:text-primary transition-colors">Tentang Kami</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex flex-col justify-center items-center px-6 pt-32 pb-20 overflow-hidden text-center">
        <!-- Background Blobs -->
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-primary/20 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-[120px] animate-pulse delay-1000"></div>

        <div class="relative z-10 max-w-4xl mx-auto flex flex-col items-center">
            <span class="inline-block px-5 py-2 rounded-full bg-white/5 border border-white/10 text-primary text-sm font-medium mb-8 backdrop-blur-sm">
                Gunakan SIAKAD, Rasakan Kemudahan Akademis.
            </span>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-extrabold leading-tight mb-8 tracking-tight">
                Semua Kebutuhan <br> Akademis, Satu <br>
                <span class="text-primary">sistem</span>
            </h1>
            
            <p class="text-lg md:text-xl text-neutral-400 max-w-2xl mb-12 leading-relaxed">
                Dari informasi lowongan kerja, data PKL, hingga inventaris sekolah—
                semua ada dalam satu sistem terpadu yang cepat, mudah, dan transparan.
            </p>

            <div class="w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang-kami" class="py-24 px-6 md:px-12 lg:px-20 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="space-y-8">
            <h2 class="text-4xl md:text-5xl font-bold leading-tight">
                KAMI SIAP MELAYANI <br> 
                <span class="text-neutral-500">SEPENUH HATI</span>
            </h2>
            <p class="text-neutral-400 text-lg leading-relaxed">
                Ini bukan sekadar belajar demi rutinitas, atau teknologi hanya karena tren. Ini tentang mendefinisikan ulang pengalaman interaktif. Kami percaya bahwa tim yang penuh talenta, gesit, dan pendekatan yang segar adalah cara untuk melampaui batas.
            </p>
            <div class="w-24 h-px bg-white/20"></div>
        </div>

        <div class="relative group">
            <p class="text-xl font-medium mb-8">Menciptakan pengalaman yang menginspirasi untuk setiap langkah menuju masa depan.</p>
            <div class="w-24 h-px bg-white/20 mb-8"></div>
            
            <div class="relative rounded-2xl overflow-hidden mb-8 transform transition-transform duration-500 group-hover:scale-[1.02]">
                <img src="{{ asset('images/digital.jpeg') }}" alt="About Image" class="w-full h-auto object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
            
            <blockquote class="text-2xl md:text-3xl font-bold italic">“Kami juga hadir di dunia digital.”</blockquote>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-24 px-6 bg-neutral-900/50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold mb-4">Layanan Kami</h2>
                <p class="text-neutral-400 text-lg">Solusi digital untuk kebutuhan akademik Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="group bg-dark-card border border-white/5 rounded-3xl p-6 hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-primary/10 flex flex-col h-full">
                    <div class="rounded-2xl overflow-hidden mb-6 h-64">
                        <img src="{{ asset('images/bkk.jpg') }}" alt="BKK" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="mt-auto">
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors">Bursa Kerja Khusus</h3>
                        <p class="text-neutral-400">Menghubungkan potensi dengan kesempatan karir yang tepat.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="group bg-dark-card border border-white/5 rounded-3xl p-6 hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-primary/10 flex flex-col h-full">
                    <div class="rounded-2xl overflow-hidden mb-6 h-64">
                        <img src="{{ asset('images/inv.jpg') }}" alt="Inventaris" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="mt-auto">
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors">Inventaris Sekolah</h3>
                        <p class="text-neutral-400">Dari peminjaman hingga pencatatan, semua inventaris kini sederhana dan rapi.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="group bg-dark-card border border-white/5 rounded-3xl p-6 hover:border-primary/50 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-primary/10 flex flex-col h-full">
                    <div class="rounded-2xl overflow-hidden mb-6 h-64">
                        <img src="{{ asset('images/pkl.jpg') }}" alt="PKL" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="mt-auto">
                        <h3 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors">Praktik Kerja Lapangan</h3>
                        <p class="text-neutral-400">Menghubungkan siswa dengan dunia kerja nyata.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="relative bg-gradient-to-br from-dark-card to-black border border-white/10 rounded-[3rem] p-12 md:p-20 overflow-hidden flex flex-col md:flex-row justify-between items-center gap-12 group">
                <!-- Glow Effect -->
                <div class="absolute top-0 right-0 w-96 h-96 bg-primary/20 blur-[100px] rounded-full translate-x-1/2 -translate-y-1/2 group-hover:bg-primary/30 transition-colors duration-500"></div>
                
                <h2 class="text-4xl md:text-6xl font-bold leading-tight relative z-10">
                    Satu platform,<br>
                    <span class="text-neutral-500">banyak kemudahan.</span>
                </h2>

                <a href="#" class="relative z-10 w-24 h-24 bg-white rounded-full flex items-center justify-center text-black hover:bg-primary hover:text-white transition-all duration-300 hover:scale-110 hover:rotate-45 shadow-lg">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <script>
        // Navbar Scroll Effect
        window.addEventListener("scroll", function() {
            const navbar = document.getElementById("navbar");
            if (window.scrollY > 20) {
                navbar.classList.add("bg-dark/80", "backdrop-blur-md", "border-b", "border-white/5", "py-4");
                navbar.classList.remove("py-5");
            } else {
                navbar.classList.remove("bg-dark/80", "backdrop-blur-md", "border-b", "border-white/5", "py-4");
                navbar.classList.add("py-5");
            }
        });

        // Mobile Menu Toggle
        function toggleMenu(btn) {
            const menu = document.getElementById("menu");
            const spans = btn.querySelectorAll('span');
            
            menu.classList.toggle("translate-x-full");
            
            if (!menu.classList.contains("translate-x-full")) {
                document.body.style.overflow = 'hidden';
                spans[0].classList.add('rotate-45', 'translate-y-2');
                spans[1].classList.add('opacity-0');
                spans[2].classList.add('-rotate-45', '-translate-y-2');
            } else {
                document.body.style.overflow = '';
                spans[0].classList.remove('rotate-45', 'translate-y-2');
                spans[1].classList.remove('opacity-0');
                spans[2].classList.remove('-rotate-45', '-translate-y-2');
            }
        }
    </script>
</body>
</html>