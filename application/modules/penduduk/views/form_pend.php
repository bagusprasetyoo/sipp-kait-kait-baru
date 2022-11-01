<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Penduduk</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?= base_url('penduduk/process') ?>" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="nik" placeholder="NIK" value="<?= $row->nik ?>" required>
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
                                <label for="exampleFormJenisKelamin" class="col-sm-2 col-form-label">Jenis Kelaminn</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="jenis_kelamin" id="exampleFormJenisKelamin">
                                        <option>-Pilih-</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
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
                                        <option>-Pilih-</option>
                                        <option>Islam</option>
                                        <option>Kristen Protestan</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Buddha</option>
                                        <option>Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status_nikah" id="status_nikah">
                                        <option>-Pilih-</option>
                                        <option>Belum Kawin</option>
                                        <option>Kawin</option>
                                        <option>Cerai Hidup</option>
                                        <option>Cerai Mati</option>
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
                                <label class="col-sm-2 col-form-label">Golongan Darah</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="gol_darah" id="gol_darah">
                                        <option>-Pilih-</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>O</option>
                                        <option>AB</option>
                                    </select>
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