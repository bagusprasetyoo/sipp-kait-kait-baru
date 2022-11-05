<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('alert_pend'); ?>
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?= base_url('penduduk/process') ?>" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No KK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nokk" placeholder="No KK" value="<?= $row->nokk ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK/No KTP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= $row->nik ?>">
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
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat (nama jalan/no rumah)" value="<?= $row->alamat ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">RT/RW</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="rt">
                                        <?php $rt = $this->input->post('rt') ? $this->input->post('rt') : $row->rt; ?>
                                        <option value="">-Pilih RT-</option>
                                        <option value="001" <?= $rt == '001' ? "selected" : null; ?>>001</option>
                                        <option value="002" <?= $rt == '002' ? "selected" : null; ?>>002</option>
                                        <option value="003" <?= $rt == '003' ? "selected" : null; ?>>003</option>
                                        <option value="004" <?= $rt == '004' ? "selected" : null; ?>>004</option>
                                        <option value="005" <?= $rt == '005' ? "selected" : null; ?>>005</option>
                                        <option value="006" <?= $rt == '006' ? "selected" : null; ?>>006</option>
                                        <option value="007" <?= $rt == '007' ? "selected" : null; ?>>007</option>
                                        <option value="008" <?= $rt == '008' ? "selected" : null; ?>>008</option>
                                        <option value="009" <?= $rt == '009' ? "selected" : null; ?>>009</option>
                                        <option value="010" <?= $rt == '010' ? "selected" : null; ?>>010</option>
                                        <option value="011" <?= $rt == '011' ? "selected" : null; ?>>011</option>
                                        <option value="012" <?= $rt == '012' ? "selected" : null; ?>>012</option>
                                        <option value="013" <?= $rt == '013' ? "selected" : null; ?>>013</option>
                                        <option value="014" <?= $rt == '014' ? "selected" : null; ?>>014</option>
                                    </select>
                                </div>
                                <div class="col-sm-5">
                                    <select class="form-control" name="rw">
                                        <?php $rt = $this->input->post('rw') ? $this->input->post('rw') : $row->rw; ?>
                                        <option value="">-Pilih RW-</option>
                                        <option value="001" <?= $rt == '001' ? "selected" : null; ?>>001</option>
                                        <option value="002" <?= $rt == '002' ? "selected" : null; ?>>002</option>
                                        <option value="003" <?= $rt == '003' ? "selected" : null; ?>>003</option>
                                        <option value="004" <?= $rt == '004' ? "selected" : null; ?>>004</option>
                                        <option value="005" <?= $rt == '005' ? "selected" : null; ?>>005</option>
                                        <option value="006" <?= $rt == '006' ? "selected" : null; ?>>006</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Dusun</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="dusun">
                                        <?php $rt = $this->input->post('dusun') ? $this->input->post('dusun') : $row->dusun; ?>
                                        <option value="">-Pilih Dusun-</option>
                                        <option value="I" <?= $rt == 'I' ? "selected" : null; ?>>I</option>
                                        <option value="II" <?= $rt == 'II' ? "selected" : null; ?>>II</option>
                                        <option value="III" <?= $rt == 'III' ? "selected" : null; ?>>III</option>
                                        <option value="IV" <?= $rt == 'IV' ? "selected" : null; ?>>IV</option>
                                        <option value="V" <?= $rt == 'V' ? "selected" : null; ?>>V</option>
                                        <option value="VI" <?= $rt == 'VI' ? "selected" : null; ?>>VI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kec/Kab</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kec_kab_prov" placeholder="Kec/Kab/Prov" value="<?= $row->kec_kab_prov ?>" required>
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
                                <label class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah" value="<?= $row->nama_ayah ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" value="<?= $row->nama_ibu ?>" required>
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
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah" value="<?= $row->nama_ayah ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" value="<?= $row->nama_ibu ?>" required>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success">Submit</i></button>
                            <a href="<?= base_url('penduduk/show'); ?>" class="btn btn-secondary">Cancel</i></a>
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