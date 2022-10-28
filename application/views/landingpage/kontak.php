<!-- Content Header (Page header) -->
<div class="content-header" style="background-color: #eaeaea;">
    <div class="container">
        <div class="row my-2">
            <div class="col-sm-6">
                <h1 class="m-0 font-weight-bold text-uppercase"> <?= $title; ?> </br></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('landingpage'); ?>">Beranda</a></li>
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
        <div class="card">
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="<?= base_url('assets/'); ?>img/logoTala.svg" alt="AdminLTE Logo" class="user-image" width="100">
                        <h2>Pemerintah<br><strong>Desa Kait-Kait Baru</strong></h2>
                        <p class="lead mb-5">Jl. Penghijauan Rt 03 Rw 02, Kec. Bati-Bati,
                            <br>Kab. Tanah Laut, Provinsi Kalimantan Selatan Kode Pos
                            70852<br>
                            Phone: 081234567890
                        </p>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" id="inputName" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">E-Mail</label>
                        <input type="email" id="inputEmail" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Subject</label>
                        <input type="text" id="inputSubject" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Kirim Pesan">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->