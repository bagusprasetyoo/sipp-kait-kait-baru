<!-- Content Header (Page header berupa breadcrumb) -->
<div class="content-header" style="background-color: #eaeaea;">
    <div class="container">
        <div class="row my-2">
            <div class="col-sm-6">
                <!-- echo php berisi variabel $title $subtitle : mengambil $data yang dikirimkan dari controller -->
                <h1 class="m-0 font-weight-bold text-uppercase"> <?= $title; ?> </br></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('landingpage'); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active"><?= $subtitle; ?></li>
                    <li class="breadcrumb-item active"><?= $title; ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container mt-3">
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card"><img src="<?= base_url('assets/img/'); ?>STRUKTUR DESA KAIT KAIT BARU.jpg"></div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->