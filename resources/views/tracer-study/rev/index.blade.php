<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Study - SMK Nurul Islam</title>
    <link rel="stylesheet" href="{{ asset(path: 'css/tracer-study/rev/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <x-preloader />
    <!-- Background Circle -->
    <div class="circle-blur circle1"></div>

    <div class="container">
        <!-- Logo -->
        <div class="logo" data-aos="fade-down" data-aos-delay="100">
            <a href="/">
                <img src="images/logo.png" alt="Logo SMK Nurul Islam">
                <span>SMK Nurul Islam</span>
            </a>
        </div>

        <!-- Hero Section -->
        <section class="hero" data-aos="fade-right">
            <h1 data-aos="fade-right" data-aos-delay="200">
                Melacak Jejak,<br>Menyongsong <br><span>Masa Depan.</span>
            </h1>
            <a href="{{ session()->has('admin_nama') || session()->has('tracer_study_name') ? '/tracer-study/dashboard' : '#login' }}"
                class="btn-pill"
                data-aos="zoom-in" data-aos-delay="400">
                Mulai Survey <i class="fa-solid fa-arrow-right"></i>
            </a>
        </section>

        <!-- Faq Section -->
        <section class="faq">
            <div class="faq-item" data-aos="fade-right" data-aos-delay="200">
                <h2>Apa itu Tracer Study?</h2>
                <p>
                    Tracer study pendidikan vokasi, selanjutnya disebut tracer study,
                    merupakan survei untuk mengetahui aktivitas kebekerjaan (bekerja,
                    wirausaha dan melanjutkan pendidikan), keselarasan, dan kepuasan dunia
                    kerja terhadap lulusan pendidikan vokasi setelah satu tahun lulus dari
                    satuan pendidikan vokasi.
                </p>
            </div>

            <div class="faq-item" data-aos="fade-left" data-aos-delay="400">
                <h2>Apa tujuan Tracer Study?</h2>
                <p>
                    Tracer Study bertujuan untuk mengetahui jejak lulusan setelah
                    menyelesaikan pendidikan, mulai dari dunia kerja, studi lanjutan, hingga
                    kontribusi mereka di masyarakat. Data ini digunakan sebagai bahan
                    evaluasi dan pengembangan mutu pendidikan.
                </p>
            </div>
        </section>

        <!-- Form Section -->
        <section class="survey" id="survey" data-aos="fade-up" data-aos-delay="200">
            <h2 data-aos="fade-down" data-aos-delay="300">Mulai Survey</h2>
            <div class="login-card" id="login" data-aos="fade-up" data-aos-delay="400">

                <!-- Alumni Form -->
                <form method="POST" action="{{ route('login') }}" id="alumni-form" class="form-box active" data-aos="fade-down">
                    @csrf
                    <div class="admin-link" data-aos="fade-down" data-aos-delay="100">
                        <a href="#" id="to-admin">Admin <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="icon-box" data-aos="fade-down" data-aos-delay="200">
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </div>
                    <h2 data-aos="fade-down" data-aos-delay="300">Masuk dengan NIK/NISN</h2>
                    <p data-aos="fade-down" data-aos-delay="400">Gunakan NISN atau NIK yang Anda miliki untuk masuk</p>

                    @if ($errors->any())
                    <p style="color: red;" data-aos="fade-down" data-aos-delay="500">{{ $errors->first() }}</p>
                    @endif

                    <div class="input-box" data-aos="fade-down" data-aos-delay="500">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="nisn" placeholder="NIK atau NISN" required>
                    </div>

                    <button type="submit" class="btn-submit" name="role" value="alumni" data-aos="fade-down" data-aos-delay="600">
                        Masuk <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>

                <!-- Admin Form -->
                <form method="POST" action="{{ route('login') }}" id="admin-form" class="form-box" data-aos="fade-down">
                    @csrf
                    <div class="admin-link" data-aos="fade-down" data-aos-delay="100">
                        <a href="#" id="to-alumni">Alumni <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="icon-box" data-aos="fade-down" data-aos-delay="200">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <h2 data-aos="fade-down" data-aos-delay="300">Masuk dengan Email & Password</h2>
                    <p data-aos="fade-down" data-aos-delay="400">Gunakan email & password admin</p>

                    <div class="input-box" data-aos="fade-down" data-aos-delay="500">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-box" data-aos="fade-down" data-aos-delay="600">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <i class="fa-solid fa-eye" id="togglePassword" style="cursor:pointer; margin-left:8px;"></i>
                    </div>

                    <button type="submit" class="btn-submit" name="role" value="admin" data-aos="fade-down" data-aos-delay="700">
                        Masuk <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>

        </section>

        <!-- Tagline -->
        <footer data-aos="fade-in" data-aos-delay="200">
            <h1>#NextLevelLife</h1>
        </footer>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const passwordInput = document.getElementById("password");
            const togglePassword = document.getElementById("togglePassword");

            if (togglePassword && passwordInput) {
                togglePassword.addEventListener("click", () => {
                    const isPassword = passwordInput.type === "password";
                    passwordInput.type = isPassword ? "text" : "password";

                    togglePassword.classList.toggle("fa-eye", !isPassword);
                    togglePassword.classList.toggle("fa-eye-slash", isPassword);
                });
            }

            const alumniForm = document.getElementById("alumni-form");
            const adminForm = document.getElementById("admin-form");
            const toAdmin = document.getElementById("to-admin");
            const toAlumni = document.getElementById("to-alumni");

            const showForm = (hideEl, showEl) => {
                hideEl?.classList.remove("active");
                showEl?.classList.add("active");
            };

            toAdmin?.addEventListener("click", (e) => {
                e.preventDefault();
                showForm(alumniForm, adminForm);
            });

            toAlumni?.addEventListener("click", (e) => {
                e.preventDefault();
                showForm(adminForm, alumniForm);
            });
        });
    </script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1500,
            easing: 'ease-in-out',
            once: false,
        });
    </script>
</body>

</html>