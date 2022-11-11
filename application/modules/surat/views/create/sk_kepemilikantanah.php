<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?= base_url('surat/add_sk_kepemilikantanah') ?>" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $penduduk['nama']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK/No KTP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= $penduduk['nik']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $penduduk['tempat_lahir']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= date('d-m-Y', strtotime($penduduk['tanggal_lahir'])); ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= $penduduk['jenis_kelamin']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat/Tempat Tinggal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat/Tempat Tinggal" value="<?= $penduduk['alamat']; ?> RT <?= $penduduk['rt']; ?>/ RW <?= $penduduk['rw']; ?> Dusun <?= $penduduk['dusun']; ?> <?= $penduduk['desa']; ?>" readonly>
                                </div>
                            </div>
                            <label>Batas-Batas Wilayah :</label>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Utara</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="utara" placeholder="" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Timur</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="timur" placeholder="" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Selatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="selatan" placeholder="" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Barat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="barat" placeholder="" value="" required>
                                </div>
                            </div>
                            <br />
                            <label>Keterangan Surat Penguasaan (SHM) :</label>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Atas Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="atas_nama" placeholder="Atas Nama Pada SHM" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nosurat" placeholder="No. Surat Pada SHM" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tglsurat" placeholder="Tanggal Surat pada SHM" value="" required>
                                </div>
                            </div>
                            <br />
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pernyataan Surat Dibuat</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="pernyataan" placeholder="Pernyataan Surat tersebut dibuat" value="" required></textarea>
                                </div>
                            </div> 
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Simpan</i></button>
                            <a href="<?= base_url('surat/show'); ?>" class="btn btn-secondary">Kembali</i></a>
                        </div>
                        <!-- /.card-footer -->
                </div>
                <!-- /.card-body -->
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->