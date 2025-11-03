<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tracer Study</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset(path: 'css/tracer-study/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body class="antialiased">
    <!-- HEADER -->
    <section class="header">
        <nav>
            <div class="navbar">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="logo">
                </div>
                <ul>
                    <li>
                        <a href="{{ session()->has('admin_nama') || session()->has('tracer_study_name') ? '/tracer-study/dashboard' : '#login' }}">
                            MASUK
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="judul">
            <h1 class="atas">
                <span class="tracer">Tracer</span><br>
                <span class="study">Study</span>
            </h1>
        </div>
    </section>

    <!-- LOGIN SECTION -->
    <section id="login" class="login-container">
        <div class="left">
            <button id="switchForm" class="switch-btn">Admin →</button>

            @if ($errors->any())
            <div class="alert alert-error"
                style="margin-top: 15px; padding:15px 20px; background:#f8d7da; color:#842029; border-radius:100px;">
                {{ $errors->first() }}
            </div>
            @endif

            <!-- Alumni Form -->
            <div id="alumniForm" class="form-wrapper active">
                <h1 class="title">ALUMNI</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <label for="nisn">NISN/NIS*</label>
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3zM4 19a8 8 0 0116 0v1H4v-1z" />
                        </svg>
                        <input type="text" name="nisn" placeholder="Masukan NISN atau NIS" required>
                    </div>
                    <p class="desc">Lorem ipsum dolor amit</p>
                    <button type="submit" class="submit-btn" name="role" value="alumni">MASUK →</button>
                </form>
            </div>

            <!-- Admin Form -->
            <div id="adminForm" class="form-wrapper">
                <h1 class="title">ADMIN</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <label for="email">EMAIL</label>
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3zM4 19a8 8 0 0116 0v1H4v-1z" />
                        </svg>
                        <input type="email" name="email" placeholder="Masukan email" required>
                    </div>

                    <label for="password">PASSWORD</label>
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3zM4 19a8 8 0 0116 0v1H4v-1z" />
                        </svg>
                        <input type="password" name="password" placeholder="Masukan password" required>
                    </div>

                    <p class="desc">Lorem ipsum dolor amit</p>
                    <button type="submit" class="submit-btn" name="role" value="admin">MASUK →</button>
                </form>
            </div>
        </div>

        <div class="right">
            <img id="formImage" src="{{ asset('images/alumni.png') }}" alt="Alumni">
        </div>
    </section>

    <!-- FOOTER -->
    <section>
        <footer class="site-footer">
            <p class="footer-title">SMK NURUL<br>ISLAM</p>
            <div class="footer-bottom">
                <hr>
                <p class="copyright">&copy; 2025 SMK NURUL ISLAM. All rights reserved.</p>
            </div>
        </footer>
    </section>

    <!-- Script -->
    <script>
        const switchBtn = document.getElementById("switchForm");
        const alumniForm = document.getElementById("alumniForm");
        const adminForm = document.getElementById("adminForm");
        const formImage = document.getElementById("formImage");

        let showingAdmin = false;

        switchBtn.addEventListener("click", () => {
            showingAdmin = !showingAdmin;

            if (showingAdmin) {
                alumniForm.classList.remove("active");
                adminForm.classList.add("active");
                switchBtn.textContent = "Alumni →";
                formImage.src = "{{ asset('images/admin.png') }}";
                formImage.alt = "Admin";
            } else {
                adminForm.classList.remove("active");
                alumniForm.classList.add("active");
                switchBtn.textContent = "Admin →";
                formImage.src = "{{ asset('images/alumni.png') }}";
                formImage.alt = "Alumni";
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash) {
                const target = document.querySelector(window.location.hash);
                if (target) {
                    setTimeout(() => {
                        target.scrollIntoView({
                            behavior: "smooth"
                        });
                    }, 200);
                }
            }
        });
    </script>
</body>

</html>