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
                    <form class="form-horizontal" action="<?= base_url('surat/add_sk_kematian') ?>" method="post">
                        <div class="card-body">
                            <label>Data Yang Meninggal :</label>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_mati" placeholder="Nama Lengkap" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK/No KTP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik_mati" placeholder="NIK" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="jenis_kelamin">
                                        <option value="">-Pilih-</option>
                                        <option value="Laki-Laki" <?= set_value('jenis_kelamin') == 'Laki-Laki' ? "selected" : null; ?>>Laki-Laki</option>
                                        <option value="Perempuan" <?= set_value('jenis_kelamin') == 'Perempuan' ? "selected" : null; ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal Lahir" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="agama">
                                        <option value="">-Pilih-</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat/Tempat Tinggal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat_mati" placeholder="Alamat/Tempat Tinggal" value="" required>
                                </div>
                            </div>
                            <br />
                            <label>Telah Meninggal Dunia Pada :</label>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hari</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="hari" placeholder="Hari" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" name="tanggal_mati" placeholder="dd-mm-yyyy" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jam</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="jam" placeholder="Jam" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bertempat di</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempat" placeholder="Tempat Kematian" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Penyebab Kematian</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="penyebab" placeholder="Penyebab Kematian" value="" required>
                                </div>
                            </div>
                            <br />
                            <label>Data Yang Melaporkan :</label>
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
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= date('d-m-Y', strtotime($penduduk['tanggal_lahir'])); ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" value="<?= $penduduk['pekerjaan']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat/Tempat Tinggal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat/Tempat Tinggal" value="<?= $penduduk['alamat']; ?> RT <?= $penduduk['rt']; ?>/ RW <?= $penduduk['rw']; ?> Dusun <?= $penduduk['dusun']; ?> <?= $penduduk['desa']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hubungan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hubungan" placeholder="Hubungan Dengan Yang Meninggal" value="" required>
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