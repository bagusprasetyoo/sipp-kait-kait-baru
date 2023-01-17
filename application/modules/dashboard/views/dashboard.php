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
                        <a href="<?= base_url('surat/show'); ?>" class="small-box-footer">Info Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
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
                        <a href="<?= base_url('surat/show'); ?>" class="small-box-footer">Info Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
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
                        <a href="<?= base_url('surat/show'); ?>" class="small-box-footer">Info Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
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
                        <a href="<?= base_url('pengguna/show'); ?>" class="small-box-footer">Info Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        <?php  } else if ($this->fungsi->user_login()->role == 'RT') { ?>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $this->fungsi->count_suratmasuk_rt(); ?></h3>

                            <p>Surat Masuk</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelope-open-text"></i>
                        </div>
                        <a href="<?= base_url('surat/show'); ?>" class="small-box-footer">Info Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $this->fungsi->count_suratselesai_rt(); ?></h3>

                            <p>Surat Selesai</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelope-circle-check"></i>
                        </div>
                        <a href="<?= base_url('surat/show'); ?>" class="small-box-footer">Info Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gray">
                        <div class="inner">
                            <h3><?= $this->fungsi->count_totalsurat_rt(); ?></h3>

                            <p>Total Surat</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelopes-bulk"></i>
                        </div>
                        <a href="<?= base_url('surat/show'); ?>" class="small-box-footer">Info Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3><?= $this->fungsi->count_pengguna_rt(); ?></h3>

                            <p>Jumlah Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="<?= base_url('pengguna/show'); ?>" class="small-box-footer">Info Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
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
        <?php if ($this->fungsi->user_login()->role == 'Admin') { ?>
            <div class="row">
                <div class="col">
                    <div class="callout callout-success">
                        <h5><b class="text-success">PANDUAN ADMIN</b></h5>
                        <b>Hal-hal yang dapat dilakukan Admin</b>
                        <li>Menambah, melihat, mengedit, dan menghapus Data Penduduk.</li>
                        <li>Menambah, melihat, mengedit, dan menghapus Data Pengguna, termasuk memilih role(Pengguna, RT, Kepala Desa, dan Admin).</li>
                        <li>Menambah, melihat, mengedit, dan menghapus Data Pejabat.</li>
                        <ul style="list-style-type:circle"><b>Tombol</b>
                            <li><button class="btn btn-success btn-sm">+ Tambah Data ...</button> : Tombol untuk menambah data.</li>
                            <li><button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button> : Tombol untuk melihat detail data.</li>
                            <li><button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button> : Tombol untuk mengedit data.</li>
                            <li><button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button> : Tombol untuk menghapus data.</li>
                        </ul>
                        <li>Mengubah profil(email, no telp, dan foto profil).</li>
                        <li>Menganti password.</li>
                        <br>
                        <b>Surat Menyurat</b>
                        <li>Melihat surat dan statusnya.</li>
                        <ul style="list-style-type:circle"><b>Validasi Surat</b>
                            <li><span class="badge bg-gray"><i class="far fa-clock"></i></span> : Menunggu Validasi.</li>
                            <li><span class="badge bg-success"><i class="fas fa-check"></i></span> : Surat sudah Divalidasi.</li>
                            <li><span class="badge bg-danger"><i class="fas fa-xmark"></i></span> : Surat ditolak.</li>
                        </ul>
                        <ul style="list-style-type:circle"><b>Status Surat</b>
                            <li><span class="badge bg-secondary">Menunggu</span> : Surat berhasil dikirim. Menunggu persetujuan dari RT dan Kepala Desa.</li>
                            <li><span class="badge bg-secondary">Disetujui RT</span> : Surat telah disetujui RT tempat pengirim surat.</li>
                            <li><span class="badge bg-success">Selesai</span> : Surat telah disetujui Kepala Desa.</li>
                            <li><span class="badge bg-danger">Ditolak</span> : Maaf, surat ditolak RT atau Kepala Desa dan tidak dapat dicetak.</li>
                        </ul>
                        <li>Melakukan pemilihan <strong>tanda tangan</strong> apabila surat sudah di setujui RT dan Kepala Desa.</li>
                        <ul style="list-style-type:circle"><b>Tombol</b>
                            <li><button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button> : Tombol untuk membaca surat.</li>
                            <li><button class="btn btn-warning btn-sm"><i class="fas fa-print"></i></button> : Tombol untuk mencetak surat.</li>
                            <li><button class="btn btn-warning btn-sm"><i class="fas fa-file-signature"></i></button> : Tombol untuk memilih penandatangan apabila Kepala Desa ingin diwakilkan.</li>
                            <li><button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button> : Tombol untuk menghapus surat.</li>
                        </ul>
                        <li>Melakukan <strong>print</strong> apabila surat sudah di setujui RT dan Kepala Desa.</li>
                        <br>
                        <b>Hal-hal yang tidak dapat dilakukan Admin</b>
                        <li>Membuat surat, pembuatan surat hanya bisa dilakukan pengguna yang login menggunakan NIK.</li>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="callout callout-danger">
                        <h5><b class="text-danger">PERINGATAN</b></h5>
                        <li>Admin diharapkan tidak mengedit dan menghapus <strong>Data Penduduk</strong> yang isi NIK-nya berupa huruf seperti Admin, Kades, RT001-RT014.</li>
                        <li>Admin diharapkan tidak mengedit dan menghapus <strong>Data Pengguna</strong> yang isi NIK-nya berupa huruf seperti Admin, Kades, RT001-RT014.</li>
                    </div>
                </div>
            </div>
        <?php  } ?>
        <?php if ($this->fungsi->user_login()->role == 'Kepala Desa' || $this->fungsi->user_login()->role == 'RT') { ?>
            <div class="row">
                <div class="col">
                    <div class="callout callout-success">
                        <h5><b class="text-success" style="text-transform: uppercase;">PANDUAN <?= $user['role']; ?></b></h5>
                        <b>Hal-hal yang dapat dilakukan <?= $user['role']; ?></b>
                        <li>Melihat Data Penduduk.</li>
                        <ul style="list-style-type:circle"><b>Tombol</b>
                            <li><button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button> : Tombol untuk melihat detail data.</li>
                        </ul>
                        <li>Mengubah profil(email, no telp, dan foto profil).</li>
                        <li>Menganti password.</li>
                        <b>Surat Menyurat</b>
                        <li>Melihat surat dan statusnya.</li>
                        <ul style="list-style-type:circle"><b>Validasi Surat</b>
                            <li><span class="badge bg-gray"><i class="far fa-clock"></i></span> : Menunggu Validasi.</li>
                            <li><span class="badge bg-success"><i class="fas fa-check"></i></span> : Surat sudah Divalidasi.</li>
                            <li><span class="badge bg-danger"><i class="fas fa-xmark"></i></span> : Surat ditolak.</li>
                        </ul>
                        <ul style="list-style-type:circle"><b>Status Surat</b>
                            <li><span class="badge bg-secondary">Menunggu</span> : Surat berhasil dikirim. Menunggu persetujuan dari RT dan Kepala Desa.</li>
                            <li><span class="badge bg-secondary">Disetujui RT</span> : Surat telah disetujui RT tempat pengirim surat.</li>
                            <li><span class="badge bg-success">Selesai</span> : Surat telah disetujui Kepala Desa.</li>
                            <li><span class="badge bg-danger">Ditolak</span> : Maaf, surat ditolak RT atau Kepala Desa dan tidak dapat dicetak.</li>
                        </ul>
                        <ul style="list-style-type:circle"><b>Tombol</b>
                            <li><button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button> : Tombol untuk membaca surat.</li>
                            <li><button class="btn btn-success btn-sm"><i class="fas fa-check"></i></button> : Tombol untuk menyetujui surat.</li>
                            <li><button class="btn btn-danger btn-sm"><i class="fas fa-xmark"></i></button> : Tombol untuk menolak surat.</li>
                        </ul>
                        <br>
                        <b>Hal-hal yang tidak dapat dilakukan <?= $user['role']; ?></b>
                        <li>Menambah, mengedit, dan menghapus Data Penduduk, Data Pengguna, dan Data Pejabat.</li>
                        <li>Membuat surat, pembuatan surat hanya bisa dilakukan pengguna yang login menggunakan NIK.</li>
                        <li>Memilih penandatangan dan mencetak surat.</li>
                    </div>
                </div>
            </div>
        <?php  } ?>
        <?php if ($this->fungsi->user_login()->role == 'Pengguna') { ?>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="callout callout-success">
                        <h5><b class="text-success">PANDUAN PENGGUNA</b></h5>
                        <b>Hal-hal yang dapat dilakukan Pengguna</b>
                        <li>Mengubah profil(email, no telp, dan foto profil).</li>
                        <li>Menganti password.</li>
                        <b>Surat Menyurat</b>
                        <li>Membuat, melihat surat dan statusnya.</li>
                        <ul style="list-style-type:circle"><b>Validasi Surat</b>
                            <li><span class="badge bg-gray"><i class="far fa-clock"></i></span> : Menunggu Validasi.</li>
                            <li><span class="badge bg-success"><i class="fas fa-check"></i></span> : Surat sudah Divalidasi.</li>
                            <li><span class="badge bg-danger"><i class="fas fa-xmark"></i></span> : Surat ditolak.</li>
                        </ul>
                        <ul style="list-style-type:circle"><b>Status Surat</b>
                            <li><span class="badge bg-secondary">Menunggu</span> : Surat berhasil dikirim. Menunggu persetujuan dari RT dan Kepala Desa.</li>
                            <li><span class="badge bg-secondary">Disetujui RT</span> : Surat telah disetujui RT tempat pengirim surat.</li>
                            <li><span class="badge bg-success">Selesai</span> : Surat telah disetujui Kepala Desa.</li>
                            <li><span class="badge bg-danger">Ditolak</span> : Maaf, surat ditolak RT atau Kepala Desa dan tidak dapat dicetak.</li>
                        </ul>
                        <ul style="list-style-type:circle"><b>Tombol</b>
                            <li><button class="btn btn-success btn-sm">+ Buat Surat</button> : Tombol untuk membuat surat.</li>
                            <li><button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button> : Tombol untuk membaca surat.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="callout callout-secondary">
                        <h5><b class="text-secondary">TAHAPAN PEMBUATAN SURAT</b></h5>
                        <ol align="justify">
                            <li>Pengguna yang ingin membuat surat harus Login terlebih dahulu.</li>
                            <li>Pilih menu <span class="text-secondary"><i class="fas fa-envelope"></i> Surat</span> pada sidebar di samping kiri( jika tidak ada klik <span class="text-secondary"><i class="fas fa-bars"></i></span>)</li>
                            <li>Klik tombol <button class="btn btn-success btn-sm">+ Pilih Surat</button> untuk memilih surat.</li>
                            <li>Pilih surat yang diperlukan, kemudian klik <button class="btn btn-success btn-sm">Buat Surat</button> untuk membuat surat.</li>
                            <li>Isikan form yang diperlukan.</li>
                            <li>Klik tombol <button class="btn btn-success btn-sm">Simpan</button> untuk menyimpan dan surat akan dikirimkan.</li>
                            <li>Lihat di tabel surat terdapat <b>Valid RT</b> dan <b>Valid Kades</b> dengan tanda <span class="badge bg-gray"><i class="far fa-clock"></i></span> dan status <span class="badge bg-secondary">Menunggu</span> yang artinya masih belum divalidasi atau disetujui.</li>
                            <li>Anda juga bisa melihat surat yang baru dibuat pada <b>Aksi</b> kemudian klik tombol <button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>.</li>
                            <li>Apabila <b>Valid RT</b> dan <b>Valid Kades</b> sudah bertanda <span class="badge bg-success"><i class="fas fa-check"></i></span> dan status berubah menjadi <span class="badge bg-success">Selesai</span> artinya surat sudah selesai dan Anda bisa mengambilnya atau menghubungi pihak desa terlebih dahulu.</li>
                            <li>Apabila <b>Valid RT</b> atau <b>Valid Kades</b> bertanda <span class="badge bg-danger"><i class="fas fa-xmark"></i></span> dan status berubah menjadi<span class="badge bg-danger">Ditolak</span> artinya surat ditolak RT atau Kepala Desa dan harap periksa surat kemungkinan terdapat kesalahan atau data tidak sesuai.</li>
                            <li>Jika hal di atas terjadi maka harap menghubungi pihak terkait sebelum membuat ulang surat.</li>
                        </ol>
                    </div>
                </div>
            </div>
        <?php  } ?>
    </div><!-- /.container-fluid -->

</section>

<!-- /.content -->