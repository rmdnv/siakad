<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siakad</title>
    <link rel="stylesheet" href="{{ asset('css/siakad/style.css') }}">
</head>

<body>
    <x-preloader />
    <!-- Hero Section -->
    <section class="hero">
        <header class="navbar">
            <div class="logo" style="font-size: 30px;">Siakad</div>
            <nav>
                <ul>
                    <li><a href="#" class="active">Beranda</a></li>
                    <li><a href="/tracer-study">BKK</a></li>
                    <li><a href="#">Inventaris</a></li>
                    <li><a href="#">PKL</a></li>
                </ul>
            </nav>
            <a href="#tentang-kami" class="btn-primary">Tentang Kami</a>
            <div class="hamburger" onclick="toggleMenu(this)">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div id="menu" class="menu">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="/tracer-study">BKK</a></li>
                    <li><a href="#">Inventaris</a></li>
                    <li><a href="#">PKL</a></li>
                    <li><a href="#tentang-kami" class="btn">Tentang Kami</a></li>
                </ul>
            </div>
            <script>
                function toggleMenu(el) {
                    el.classList.toggle("active");
                    document.getElementById("menu").classList.toggle("show");

                    if (document.getElementById("menu").classList.contains("show")) {
                        document.body.classList.add("no-scroll");
                    } else {
                        document.body.classList.remove("no-scroll");
                    }
                }
            </script>
            <script>
                window.addEventListener("scroll", function() {
                    const navbar = document.querySelector(".navbar");
                    if (window.scrollY > 0) {
                        navbar.classList.add("scrolled");
                    } else {
                        navbar.classList.remove("scrolled");
                    }
                });
                const links = document.querySelectorAll(".navbar ul li a");

                links.forEach(link => {
                    link.addEventListener("click", function() {
                        links.forEach(l => l.classList.remove("active"));
                        this.classList.add("active");
                    });
                });
            </script>
        </header>
        <!-- Circle Blur -->
        <div class="circle-blur"></div>
        <div class="circle-blur circle2"></div>
        <p class="tagline" style="padding: 5px 20px; border-radius: 100px; box-shadow: 0px 0px 2px rgba(255, 255, 255); max-width: 500px;">Gunakan SIAKAD, Rasakan Kemudahan Akademis.</p>
        <h1>
            Semua Kebutuhan <br> Akademis, Satu <br>
            <!-- <span class="highlight" style="letter-spacing: 1.5rem; font-size: 80px;">sistem</span> -->
            <h1 class="hero highlight">sistem</h1>
        </h1>
        <p class="desc" style="max-width: 380px;">
            Dari informasi lowongan kerja, data PKL, hingga inventaris sekolah—
            semua ada dalam satu sistem terpadu yang cepat, mudah, dan transparan.
        </p>
        <hr>
    </section>

    <!-- Section 1 -->
    <section class="section section-alt" id="tentang-kami">
        <div class="left-text">
            <h2 style="line-height: 0.7; letter-spacing: 0.1rem;">KAMI SIAP MELAYANI <br> KAMI SIAP MELAYANI <br> KAMI SIAP MELAYANI</h2>
            <!-- <hr style="margin-bottom: 30px;"> -->
            <p>Ini bukan sekadar belajar demi rutinitas, atau teknologi hanya karena tren. Ini tentang mendefinisikan ulang pengalaman interaktif. Kami percaya bahwa tim yang penuh talenta, gesit, dan pendekatan yang segar adalah cara untuk melampaui batas, dikenal, dan berdiri di atas keramaian.</p>
            <hr style="margin: 1rem 20rem 2rem 0rem;">
        </div>
        <div class="right-img">
            <p style="max-width: 320px;">Menciptakan pengalaman yang menginspirasi untuk setiap langkah menuju masa depan.</p>
            <hr style="margin: 1rem 20rem 2rem 0rem;">
            <img src="{{ asset('images/t1.png') }}" alt="image">
            <blockquote style="font-size: 30px; max-width: 350px; font-weight: bold;">“Kami juga hadir di dunia digital.”</blockquote>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="layanan">
        <h2>Layanan Kami</h2>

        <div class="service-block">
            <!-- Service 1 -->
            <div class="service service-overlay">
                <img src="{{ asset('images/l1.png') }}" alt="Service 1">
                <div class="service-text">
                    <h3>menghubungkan potensi dengan kesempatan.</h3>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service reverse">
                <div class="service-text">
                    <h3>Dari peminjaman hingga pencatatan, semua inventaris kini sederhana dan rapi.</h3>
                </div>
                <img src="{{ asset('images/l2.png') }}" alt="Service 2">
            </div>

            <!-- Service 3 -->
            <div class="service bawah">
                <img src="{{ asset('images/l3.png') }}" alt="Service 3">
                <div class="service-text">
                    <h3>Menghubungkan siswa dengan dunia kerja nyata, menghadirkan pengalaman belajar yang berkesan dan terarah.</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA -->
    <section class="cta">
        <div class="cta-text">
            <h2>Satu platform,<br> banyak kemudahan.</h2>
        </div>
        <a href="#" class="cta-btn">→</a>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const el = document.querySelector(".hero.highlight");
            const text = el.textContent;
            el.innerHTML = [...text].map((ch, i) =>
                `<span class="${i % 2 === 0 ? 'white' : 'purple'}">${ch}</span>`
            ).join("");
        });
    </script>
</body>

</html>