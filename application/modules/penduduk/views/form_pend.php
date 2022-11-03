<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?= base_url('penduduk/process') ?>" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= $row->nik ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $row->nama ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $row->tempat_lahir ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col sm-10 input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $row->tanggal_lahir ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleFormJenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="jenis_kelamin">
                                        <?php $jenis_kelamin = $this->input->post('jenis_kelamin') ? $this->input->post('jenis_kelamin') : $row->jenis_kelamin; ?>
                                        <option value="">-Pilih-</option>
                                        <option value="Laki-Laki" <?= $jenis_kelamin == 'Laki-Laki' ? "selected" : null; ?>>Laki - laki</option>
                                        <option value="Perempuan" <?= $jenis_kelamin == 'Perempuan' ? "selected" : null; ?>>Perempuan</option>
                                    </select>
                                    <?= form_error('role') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $row->alamat ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">RT/RW</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="rt" placeholder="RT" value="<?= $row->rt ?>" required>
                                </div>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="rw" placeholder="RW" value="<?= $row->rw ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Desa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="desa" placeholder="Desa" value="<?= $row->desa ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Dusun</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dusun" placeholder="Dusun" value="<?= $row->dusun ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kec/Kab</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kec_kab" placeholder="Kec/Kab" value="<?= $row->kec_kab ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleFormAgama" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="agama" id="exampleFormAgama">
                                    <?php $agama = $this->input->post('agama') ? $this->input->post('agama') : $row->agama; ?>
                                        <option value="">-Pilih-</option>
                                        <option value="Islam" <?= $agama == 'Islam' ? "selected" : null; ?>>Islam</option>
                                        <option value="Kristen Protestan" <?= $agama == 'Kristen Protestan' ? "selected" : null; ?>>Kristen Protestan</option>
                                        <option value="Katolik" <?= $agama == 'Katolik' ? "selected" : null; ?>>Katolik</option>
                                        <option value="Hindu" <?= $agama == 'Hindu' ? "selected" : null; ?>>Hindu</option>
                                        <option value="Buddha" <?= $agama == 'Buddha' ? "selected" : null; ?>>Buddha</option>
                                        <option value="Konghucu" <?= $agama == 'Konghucu' ? "selected" : null; ?>>Konghucu</option>
                                    </select>
                                    <?= form_error('role') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status_nikah" id="status_nikah">
                                    <?php $status_nikah = $this->input->post('status_nikah') ? $this->input->post('status_nikah') : $row->status_nikah; ?>
                                        <option value="">-Pilih-</option>
                                        <option value="Belum Kawin" <?= $status_nikah == 'Belum Kawin' ? "selected" : null; ?>>Belum Kawin</option>
                                        <option value="Kawin" <?= $status_nikah == 'Kawin' ? "selected" : null; ?>>Kawin</option>
                                        <option value="Cerai Hidup" <?= $status_nikah == 'Cerai Hidup' ? "selected" : null; ?>>Cerai Hidup</option>
                                        <option value="Cerai Mati" <?= $status_nikah == 'Cerai Mati' ? "selected" : null; ?>>Cerai Mati</option>
                                    </select>
                                    <?= form_error('role') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" value="<?= $row->pekerjaan ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kewarganegaraan" placeholder="Kewarganegaraan" value="<?= $row->kewarganegaraan ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Golongan Darah</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="gol_darah" id="gol_darah">
                                    <?php $gol_darah = $this->input->post('gol_darah') ? $this->input->post('gol_darah') : $row->gol_darah; ?>
                                        <option value="">-Pilih-</option>
                                        <option value="A" <?= $gol_darah == 'A' ? "selected" : null; ?>>A</option>
                                        <option value="B" <?= $gol_darah == 'B' ? "selected" : null; ?>>B</option>
                                        <option value="O" <?= $gol_darah == 'O' ? "selected" : null; ?>>O</option>
                                        <option value="AB" <?= $gol_darah == 'AB' ? "selected" : null; ?>>AB</option>
                                    </select>
                                    <?= form_error('role') ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success">Submit</i></button>
                            <a href="<?= base_url('penduduk/tampil_pend'); ?>" class="btn btn-secondary">Cancel</i></a>
                        </div>
                        <!-- /.card-footer -->
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