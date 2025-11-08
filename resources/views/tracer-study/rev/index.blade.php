<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tracer Study - SMK Nurul Islam</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(path: 'css/tracer-study/rev/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body>
    <a href="/" class="logo" style="text-decoration: none; color: inherit;">
        <img src="/images/logo.png" alt="Logo SMK Nurul Islam">
        <span>SMK Nurul Islam</span>
    </a>

    <!-- HERO -->
    <section class="hero">
        <h1>Melacak Jejak, Menyongsong Masa Depan.</h1>
        <p>Tracer Study membantu sekolah memahami perjalanan alumni untuk meningkatkan kualitas pendidikan dan relevansi kompetensi kerja.</p>

        @if(session()->has('tracer_study_id'))
        <a href="{{ url('/tracer-study/dashboard') }}" class="btn">Lanjut Survey <i class="fa-solid fa-arrow-right"></i></a>
        @else
        <a href="#login" class="btn">Mulai Survey <i class="fa-solid fa-arrow-right"></i></a>
        @endif
    </section>

    <!-- MAIN CONTENT -->
    <div class="content">
        <!-- FAQ -->
        <div class="faq">
            <h2>Apa itu Tracer Study?</h2>
            <p>
                Tracer Study adalah survei untuk mengetahui aktivitas alumni setelah lulus dari sekolah,
                seperti bekerja, berwirausaha, atau melanjutkan pendidikan.
            </p>
            <h2>Apa tujuannya?</h2>
            <p>
                Tujuannya adalah mengevaluasi kesesuaian kompetensi lulusan dengan kebutuhan industri
                dan membantu pengembangan mutu pendidikan SMK Nurul Islam.
            </p>
            <h2>Kenapa penting?</h2>
            <p>
                Data dari Tracer Study membantu sekolah menyesuaikan kurikulum dan meningkatkan peluang kerja bagi lulusan.
            </p>
        </div>

        <!-- LOGIN FORM -->
        <div class="login-card" id="login">
            <!-- Alumni Form -->
            <form method="POST" action="{{ route('login') }}" id="alumni-form" class="form-box active">
                @csrf
                <div class="switch-link">
                    <a href="#" id="to-admin">Admin →</a>
                </div>
                <h2>Masuk Alumni</h2>
                <p>Gunakan NISN atau NIK Anda</p>
                <div class="input-box">
                    <i class="fa-solid fa-id-card"></i>
                    <input type="text" name="nisn" placeholder="NIK atau NISN" required>
                    <small id="error-nisn" style="color:red;"></small>
                </div>
                <button type="submit" class="btn-submit" name="role" value="alumni">Masuk</button>
            </form>

            <!-- Admin Form -->
            <form method="POST" action="{{ route('login') }}" id="admin-form" class="form-box">
                @csrf
                <div class="switch-link">
                    <a href="#" id="to-alumni">← Alumni</a>
                </div>
                <h2>Masuk Admin</h2>
                <p>Gunakan Email dan Password</p>
                <div class="input-box">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-submit" name="role" value="admin">Masuk</button>
            </form>
        </div>
    </div>

    <footer>#NextLevelLife</footer>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const alumniForm = document.getElementById("alumni-form");
            const adminForm = document.getElementById("admin-form");
            const toAdmin = document.getElementById("to-admin");
            const toAlumni = document.getElementById("to-alumni");

            toAdmin?.addEventListener("click", e => {
                e.preventDefault();
                alumniForm.classList.remove("active");
                adminForm.classList.add("active");
            });

            toAlumni?.addEventListener("click", e => {
                e.preventDefault();
                adminForm.classList.remove("active");
                alumniForm.classList.add("active");
            });
        });
    </script>
    <script>
        @if(session('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 3000,
            close: false,
            gravity: "top",
            position: "right",
            backgroundColor: "#ef4444",
            stopOnFocus: true,
        }).showToast();
        @endif
    </script>
</body>

</html>