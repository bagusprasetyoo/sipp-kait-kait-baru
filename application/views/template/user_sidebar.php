<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard'); ?>" class="brand-link" style="background-color: #207030;">
        <img src="<?= base_url('assets/'); ?>img/logoTala.svg" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text font-weight-light">SIPP DKKB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <span class="username"><a href="<?= base_url('pengaturan/edit_profile'); ?>" class="d-block"><?= $this->fungsi->user_login()->nama; ?></a></span>
            </div>
        </div>


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php if ($this->fungsi->user_login()->role == 'Admin' || $this->fungsi->user_login()->role == 'Kepala Desa' || $this->fungsi->user_login()->role == 'RT') { ?>
                    <li class="nav-item">
                        <a href="<?= base_url('penduduk/tampil_pend'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>
                            <p>Data Penduduk</p>
                        </a>
                    </li>
                <?php }
                if ($this->fungsi->user_login()->role == 'Admin') { ?>
                    <li class="nav-item">
                        <a href="<?= base_url('pengguna/tampil_peng'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Data Pengguna</p>
                        </a>
                    </li>
                <?php  } ?>
                <li class="nav-item">
                    <a href="<?= base_url('surat/tampil_surat'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Surat</p>
                    </a>
                </li>
                <?php if ($this->fungsi->user_login()->role == 'Admin') { ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>Profile Desa</p>
                        </a>
                    </li>
                <?php  } ?>
                <li class="nav-item">
                    <a href="<?= base_url('pengaturan/edit_profile'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-gear"></i>
                        <p>Pengaturan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout'); ?>" class="nav-link text-red" onclick="return confirm('Anda yakin Ingin Keluar?')">
                        <i class="nav-icon fas fa-right-from-bracket"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>" class="text-green">Home</a>
                        </li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->