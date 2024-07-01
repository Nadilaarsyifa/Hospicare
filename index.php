<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hospicare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body style="height: 1000px;">
    <!--header-->
    <nav class="navbar navbar-expand  navbar-dark sticky-top">
        <div class="container-lg">
            <a class="navbar-brand" href="#">
                <i class="bi bi-hospital"></i> HOSPICARE
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            USER
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2 border-success">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"></i> Profil</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"></i> Ubah Password</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"></i> Riwayat Aktivitas</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end header-->

    <div class="container-lg" class="display" style="width:100%">
        <div class="row">
            <!--sidebar navigasi-->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-body-tertiary rounded mt-2 border">
                    <div class="container-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Explorer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="nav nav-pills flex-column flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link link-dark" data-bs-toggle="collapse" href="#aboutUsList" role="button" aria-expanded="false" aria-controls="aboutUsList">
                                            Tentang Kami
                                            <i class="bi bi-chevron-down"></i>
                                        </a>
                                        <div class="collapse" id="aboutUsList">
                                            <ul class="nav flex-column ms-3">
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">Profil</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">Visi dan Misi</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">Kontak</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">Alamat</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link link-dark" data-bs-toggle="collapse" href="#healthInsuranceList" role="button" aria-expanded="false" aria-controls="healthInsuranceList">
                                            Jaminan Kesehatan
                                            <i class="bi bi-chevron-down"></i>
                                        </a>
                                        <div class="collapse" id="healthInsuranceList">
                                            <ul class="nav flex-column ms-3">
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">Manfaat</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">Peserta</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">Prosedur Pendaftaran</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link link-dark" data-bs-toggle="collapse" href="#publicInfoList" role="button" aria-expanded="false" aria-controls="publicInfoList">
                                            Informasi Publik
                                            <i class="bi bi-chevron-down"></i>
                                        </a>
                                        <div class="collapse" id="publicInfoList">
                                            <ul class="nav flex-column ms-3">
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">Berita Umum</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">Kesehatan</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">Foto dan Video</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link link-dark" data-bs-toggle="collapse" href="#hospitalList" role="button" aria-expanded="false" aria-controls="hospitalList">
                                            Rumah Sakit
                                            <i class="bi bi-chevron-down"></i>
                                        </a>
                                        <div class="collapse" id="hospitalList">
                                            <ul class="nav flex-column ms-3">
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">RS Kasih Ibu</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">RS MMC</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">RS Bunda</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">RS Teuku Umar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">RS Cut Nyak Dien</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-dark" href="#">RS Firdaus</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--end sidebar navigasi-->

            <!--content-->
            <div class="col-lg-9">
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="jumbotron jumbotron-fluid" style="background-color: #343a40; color: #fff; text-align: center; padding: 2rem;">
                            <div class="container">
                                <h1 class="display-4">Selamat datang di Hospicare</h1>
                                <p class="lead">Portal informasi yang menyediakan akses terperinci tentang layanan kesehatan rumah sakit. Temukan ketersediaan kamar, jadwal dokter, dan fasilitas lengkap untuk memastikan perawatan yang terbaik bagi Anda dan keluarga.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content-->



        </div>

        <!-- Footer-->
        <div class="text-center bg-light fixed-bottom py-2">
            Copyright 2024 Nadila Arsyifa //HOSPICARE
        </div>
        <!-- end Footer-->
    </div>

    <!-- Modal-->

    <!-- End Modal-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>