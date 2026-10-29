<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Portal Qur'an</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="  style.css">
</head>
<body class="quran-admin-auth">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-8 col-lg-5">
                
                <div class="quran-admin-auth__card shadow-lg">
                    <div class="quran-admin-auth__header text-center">
                        <div class="quran-admin-auth__icon-wrapper mb-3">
                            <i class="fas fa-user-shield quran-admin-auth__icon"></i>
                        </div>
                        <h2 class="quran-admin-auth__title">Portal Admin</h2>
                        <p class="quran-admin-auth__subtitle">Silakan masuk untuk mengelola sistem</p>
                    </div>

                    <div class="quran-admin-auth__body">
                        <form action="#" method="POST" class="quran-admin-auth__form">
                            <div class="form-group mb-4">
                                <label for="adminUsername" class="quran-admin-auth__label">Nama Pengguna</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text quran-admin-auth__input-icon">
                                            <i class="fas fa-user-lock"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="adminUsername" class="form-control quran-admin-auth__input" placeholder="Masukkan username admin" required>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="adminEmail" class="quran-admin-auth__label">Alamat Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text quran-admin-auth__input-icon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" id="adminEmail" class="form-control quran-admin-auth__input" placeholder="admin@email.com" required>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="adminPassword" class="quran-admin-auth__label">Kata Sandi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text quran-admin-auth__input-icon">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="password" id="adminPassword" class="form-control quran-admin-auth__input" placeholder="Masukkan kata sandi" required>
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-between align-items-center mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input quran-admin-auth__checkbox" id="ingatAdmin">
                                    <label class="custom-control-label quran-admin-auth__checkbox-label" for="ingatAdmin">Simpan sesi login</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block quran-admin-auth__btn quran-admin-auth__btn--submit mt-4">
                                Masuk Dasbor <i class="fas fa-sign-in-alt ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>