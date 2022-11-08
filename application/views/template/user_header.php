<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $user['role']; ?> - <?= $title; ?></title>

    <link rel="icon" href="<?= base_url(); ?>/assets/img/Lambang_Kabupaten_Tanah_Laut.svg" type="image/svg">

    <!-- Customm CSS -->
    <!-- <link rel="stylesheet" href="assets/customstyle.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">

    <!-- Tabel Bootsrap -->
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url('assets/'); ?>img/Lambang_Kabupaten_Tanah_Laut.svg" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-green navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-danger navbar-badge">12</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">12 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 surat baru
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 pengguna baru
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> -->
                <!--Nama Pengguna dan Modal-->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="user-image img-circle  " alt="User Image">
                        <span class="d-none d-md-inline"><?= $this->fungsi->user_login()->nama; ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-green">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">

                            <p>
                                <?= $this->fungsi->user_login()->nama; ?> - <?= $user['role']; ?>
                                <small><?= $user['nik']; ?></small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="<?= base_url('pengaturan/edit_profile'); ?>" class="btn btn-default btn-flat">Pengaturan</a>
                            <a href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Anda yakin Ingin Keluar?')" class="btn btn-danger btn-flat float-right">Logout</a>
                        </li>
                    </ul>
                </li>
                <!--/.Nama Pengguna dan Modal-->
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->