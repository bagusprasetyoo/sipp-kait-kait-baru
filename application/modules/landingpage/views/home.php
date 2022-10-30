<!-- Content Header (Page header Carousel) -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="container">
            <div class="carousel-caption d-none d-md-block" style="bottom: 220px;">
                <h5>Kait-Kait Baru</h5>
                <p>Kec. Bati-Bati, Kab. Tanah Laut</p>
                <p><a class="btn btn-lg btn-success my-3" href="<?= base_url('auth/registration'); ?>" role="button">DAFTAR</a></p>
            </div>
        </div>
        <div class="carousel-item active">
            <img class="first-slide" src="<?= base_url('assets/'); ?>img/IMG_4187.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="<?= base_url('assets/'); ?>img/IMG_4191.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="<?= base_url('assets/'); ?>img/IMG_4192.jpg" alt="Third slide">
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
                <h5 class="text-center" style="color: #207030;"><b>FITUR SISTEM INFORMASI LAYANAN DESA</b></h>
            </div>
        </div>
        <div class="row pt-2 mx-2">
            <div class="col">
                <p class="text-justify">
                    Sistem ini dibuat untuk mempermudah masyarakat mengakses layanan umum yang tersedia di Desa Kait-Kait
                    Baru. Sistem ini dapat menjangkau dan mempercepat proses pelayanan yang tersedia di desa. Sistem ini
                    menyediakan layanan pembuatan surat yang diproses oleh sistem. Dengan adanya sistem ini masyarakat dapat
                    lebih mudah mendapatkan pelayanan tanpa pulang pergi ke kantor desa.
                </p>
            </div>
        </div>
    </div>
    <!-- /Info Fitur Aplikasi -->

    <div class="container-fluid">
        <div class="card card-widget widget-user">


        </div>
    </div>

    <div class="container-fluid text-center my-3" style="background-color: #eaeaea;">
        <div class="row">
            <div class="col pt-3">
                <h5 style="color: #207030;"><b>FITUR SISTEM INFORMASI LAYANAN DESA</b></h>
            </div>
        </div>
        <div class="row fs-1" style="color: #47AF42;">
            <div class="col-4">1095</div>
            <div class="col-4">1055</div>
            <div class="col-4">2150</div>
        </div>
        <div class="row pb-4" style="color: #353535;">
            <div class="col-4">Laki-Laki</div>
            <div class="col-4">Perempuan</div>
            <div class="col-4">Total Penduduk</div>
        </div>
    </div>
</div>
<!-- /.content -->