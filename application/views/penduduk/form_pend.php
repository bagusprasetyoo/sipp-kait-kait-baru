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
                    <form class="form-horizontal" action="<?= base_url('penduduk/proses'); ?>">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik" placeholder="NIK">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempatlahir" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col sm-10 input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggallahir" placeholder="Tanggal Lahir" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleFormJenisKelamin" class="col-sm-2 col-form-label">Jenis Kelaminn</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="exampleFormJenisKelamin">
                                        <option>Pengguna</option>
                                        <option>Admin</option>
                                        <option>Kepala Desa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">RT</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="rt" placeholder="RT">
                                </div>
                                <label class="col-sm-2 col-form-label">RW</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="rw" placeholder="RW">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Dusun</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dusun" placeholder="Dusun">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Desa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dsea" placeholder="Desa">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kacamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kec" placeholder="Kecamatan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kabupaten</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kab" placeholder="Kabupaten">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Provinsi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="prov" placeholder="Provinsi">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="agama" placeholder="Agama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="status_nikah" placeholder="Status Perkawinan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kewarganegaraan" placeholder="Kewarganegaraan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Golongan Darah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="gol_darah" placeholder="Golongan Darah">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="#" class="btn btn-success">Submit</i></a>
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