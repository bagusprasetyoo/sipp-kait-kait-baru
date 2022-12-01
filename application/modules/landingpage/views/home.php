<!-- Content Header (Page header Carousel) -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner bg-dark">
        <div class="container">
            <div class="carousel-caption" style="bottom: 220px;">
                <h5>Kait-Kait Baru</h5>
                <p>Kec. Bati-Bati, Kab. Tanah Laut</p>
                <p><a class="btn btn-lg btn-success my-3" href="<?= base_url('auth/registration'); ?>" role="button">DAFTAR</a></p>
            </div>
        </div>
        <div class="carousel-item active">
            <img class="first-slide" style="opacity: 0.3;" src="<?= base_url('assets/'); ?>img/IMG_4187.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="second-slide" style="opacity: 0.3;" src="<?= base_url('assets/'); ?>img/IMG_4191.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="third-slide" style="opacity: 0.3;" src="<?= base_url('assets/'); ?>img/IMG_4192.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <!--Jam Operasional-->
    <div class="container my-4">
        <div class="card-group text-center">
            <div class="card card-success shadow-sm">
                <div class="card-header" style="color:#f5f5f5; background-color: #207030;">
                    <h3 class="card-title text-center">JAM OPERASIONAL</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    Senin - Jum'at : 08:00 - 03:00 <br />
                    Sabtu - Minggu : Libur
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card card-success shadow-sm">
                <div class="card-header" style="color:#f5f5f5; background-color: #207030;">
                    <h3 class="card-title">ALAMAT</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    Jl. Penghijauan Rt 03 Rw 02, Kec. Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan Kode Pos
                    70852
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.jam operasional -->

    <!-- Info Fitur Aplikasi -->
    <div class="container p-4 my-3">
        <div class="row">
            <div class="col">
                <h4 class="text-center text-success"><b>FITUR SISTEM INFORMASI LAYANAN DESA</b></h4>
            </div>
        </div>
        <div class="row pt-2 mx-2">
            <div class="col">
                <p class="text-justify" style="font-size: 14pt;">
                    Sistem ini dibuat untuk mempermudah masyarakat mengakses layanan umum yang tersedia di Desa Kait-Kait
                    Baru. Sistem ini dapat menjangkau dan mempercepat proses pelayanan yang tersedia di desa. Sistem ini
                    menyediakan layanan pembuatan surat yang diproses oleh sistem. Dengan adanya sistem ini masyarakat dapat
                    lebih mudah mendapatkan pelayanan tanpa pulang pergi ke kantor desa.
                </p>
            </div>
        </div>
    </div>
    <!-- /Info Fitur Aplikasi -->
    <div class="row py-4" style="background-color: #eaeaea;">
        <div class="col-12 text-center">
            <h4 class="text-green mb-3"><b>STATISTIK PENDUDUK</b></h4>
        </div>
        <div class="col-12 col-sm-4">
            <div class="info-box bg-light">
                <div class="info-box-content">
                    <span class="info-box-number text-center mb-0" style="font-size: 23pt;"><?= $this->fungsi->count_pend_lk(); ?></span>
                    <span class="info-box-text text-center text-green">Laki-Laki</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="info-box bg-light">
                <div class="info-box-content">
                    <span class="info-box-number text-center mb-0" style="font-size: 23pt;"><?= $this->fungsi->count_pend_pr(); ?></span>
                    <span class="info-box-text text-center text-green">Perempuan</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="info-box bg-light">
                <div class="info-box-content">
                    <span class="info-box-number text-center mb-0" style="font-size: 23pt;"><?= $this->fungsi->count_data('tb_penduduk'); ?></span>
                    <span class="info-box-text text-center text-green">Total Penduduk</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->