<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <?php if ($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Kepala Desa' || $this->session->userdata('role') == 'RT') { ?>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>50</h3>

                            <p>Surat Masuk</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelope-open-text"></i>
                        </div>
                        <a href="/xadmin/surat.html" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>33</h3>

                            <p>Surat Disetujui</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelope-circle-check"></i>
                        </div>
                        <a href="/xadmin/surat.html" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gray">
                        <div class="inner">
                            <h3>83</h3>

                            <p>Total Surat</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelopes-bulk"></i>
                        </div>
                        <a href="/xadmin/surat.html" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>5</h3>

                            <p>Jumlah Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="/xadmin/pengguna.html" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        <?php  } ?>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col">
                <div class="callout callout-success">
                    <h5>Hai 👋, <?= $this->fungsi->user_login()->nama; ?></h5>

                    <p>Selamat datang di Sistem Informasi Pelayanan Publik
                        <br> Desa Kait-Kait Baru
                    </p>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

</section>

<!-- /.content -->