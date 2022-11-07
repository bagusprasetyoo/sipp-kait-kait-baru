<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <?php if ($this->fungsi->user_login()->role == 'Admin' || $this->fungsi->user_login()->role == 'Kepala Desa') { ?>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $this->fungsi->count_suratmasuk(); ?></h3>

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
                            <h3><?= $this->fungsi->count_suratselesai(); ?></h3>

                            <p>Surat Selesai</p>
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
                            <h3><?= $this->fungsi->count_data('tb_surat'); ?></h3>

                            <p>Total Surat</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelopes-bulk"></i>
                        </div>
                        <a href="<?= base_url('surat/show'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3><?= $this->fungsi->count_data('tb_pengguna'); ?></h3>

                            <p>Jumlah Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="<?= base_url('pengguna/show'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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