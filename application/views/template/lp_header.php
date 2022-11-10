<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <link rel="icon" href="<?= base_url(); ?>/assets/img/Lambang_Kabupaten_Tanah_Laut.svg" type="image/svg">
    <!-- Customm CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>mycss/customstyle.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-green">
            <div class="container">
                <a href="userberanda.html" class="navbar-brand">
                    <img src="<?= base_url('assets/'); ?>/img/logoTala.svg" alt="Tanah Laut Logo" class="brand-image ">
                    <span class="brand-text font-weight-light"><b>SIPP Desa Kait-Kait Baru</b></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="<?= base_url('landingpage'); ?>" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Layanan</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?= base_url('landingpage'); ?>/layanan" class="dropdown-item">Layanan Umum</a></li>
                                <li class="dropdown-divider"></li>
                                <li></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Profil Desa</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?= base_url('landingpage'); ?>/visimisi" class="dropdown-item">Visi Misi</a></li>
                                <li><a href="<?= base_url('landingpage'); ?>/struktur" class="dropdown-item">Struktur Pemerintahan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('landingpage'); ?>/kontak" class="nav-link">Kontak</a>
                        </li>
                    </ul>

                    <!-- Right navbar links berisi tombol LOGIN DAN DAFTAR/REGISTRASI -->
                    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                        <li class="nav-item">
                            <a href="<?= base_url('auth/login'); ?>" class="btn btn-outline-light mx-2 btn-flat" style="color: #eaeaea;">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('auth/registration'); ?>" class="btn btn-light btn-flat text-green">DAFTAR</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">