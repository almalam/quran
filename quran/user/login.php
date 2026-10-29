<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login quran</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body class="quran-auth">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-8 col-lg-5">
                
                <div class="quran-auth__card shadow-lg">
                    <div class="quran-auth__header text-center">
                        <div class="quran-auth__icon-wrapper mb-3">
                            <i class="fas fa-book-open quran-auth__icon"></i>
                        </div>
                        <h2 class="quran-auth__title" id="authTitle">Login</h2>
                        <p class="quran-auth__subtitle" id="authSubtitle">Silakan masuk untuk melanjutkan</p>
                    </div>

                    <div class="quran-auth__body">
                        <div id="loginForm" class="quran-auth__form-wrapper quran-auth__fade-in">
                            <form action="#" method="POST" class="quran-auth__form">
                                <div class="form-group mb-4">
                                    <label for="loginNama" class="quran-auth__label">Nama Lengkap</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text quran-auth__input-icon"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" id="loginNama" class="form-control quran-auth__input" placeholder="Masukkan nama lengkap Anda" required>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="loginWa" class="quran-auth__label">Nomor WhatsApp</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text quran-auth__input-icon"><i class="fab fa-whatsapp"></i></span>
                                        </div>
                                        <input type="tel" id="loginWa" class="form-control quran-auth__input" placeholder="Contoh: 081234567890" required>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input quran-auth__checkbox" id="ingatSaya">
                                        <label class="custom-control-label quran-auth__checkbox-label" for="ingatSaya">Ingat saya</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-block quran-auth__btn quran-auth__btn--submit mb-4">
                                    Masuk <i class="fas fa-arrow-right ml-2"></i>
                                </button>

                                <div class="text-center">
                                    <p class="quran-auth__text">Belum punya akun? 
                                        <a href="#" id="btnShowRegister" class="quran-auth__link">Daftar sekarang</a>
                                    </p>
                                </div>
                            </form>
                        </div>

                        <!-- daftar -->
                        <div id="registerForm" class="quran-auth__form-wrapper quran-auth__fade-in d-none">
                            <form action="#" method="POST" class="quran-auth__form">
                                <div class="form-group mb-4">
                                    <label for="regNama" class="quran-auth__label">Nama Lengkap</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text quran-auth__input-icon"><i class="fas fa-user-plus"></i></span>
                                        </div>
                                        <input type="text" id="regNama" class="form-control quran-auth__input" placeholder="Nama sesuai KTP/Asli" required>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="regWa" class="quran-auth__label">Nomor WhatsApp</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text quran-auth__input-icon"><i class="fab fa-whatsapp"></i></span>
                                        </div>
                                        <input type="tel" id="regWa" class="form-control quran-auth__input" placeholder="Gunakan nomor yang aktif" required>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input quran-auth__checkbox" id="syarat" required>
                                        <label class="custom-control-label quran-auth__checkbox-label" for="syarat">Saya setuju dengan syarat & ketentuan</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-block quran-auth__btn quran-auth__btn--submit mb-4">
                                    Daftar Akun <i class="fas fa-user-check ml-2"></i>
                                </button>

                                <div class="text-center">
                                    <p class="quran-auth__text">Sudah punya akun? 
                                        <a href="#" id="btnShowLogin" class="quran-auth__link">Masuk di sini</a>
                                    </p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const authTitle = document.getElementById('authTitle');
            const authSubtitle = document.getElementById('authSubtitle');
            
            const btnShowRegister = document.getElementById('btnShowRegister');
            const btnShowLogin = document.getElementById('btnShowLogin');

            // buat pindah
            btnShowRegister.addEventListener('click', function(e) {
                e.preventDefault();
                loginForm.classList.add('d-none');
                registerForm.classList.remove('d-none');
                
                authTitle.textContent = "Buat Akun Baru";
                authSubtitle.textContent = "Lengkapi data di bawah untuk mendaftar";
            });

            // buat balik ke form Login
            btnShowLogin.addEventListener('click', function(e) {
                e.preventDefault();
                registerForm.classList.add('d-none');
                loginForm.classList.remove('d-none');
                
                authTitle.textContent = "Login";
                authSubtitle.textContent = "Silakan masuk untuk melanjutkan";
            });
        });
    </script>
</body>
</html>