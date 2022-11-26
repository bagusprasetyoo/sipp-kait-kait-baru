<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('alert_peng'); ?>
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?= base_url('pengguna/add') ?>" method="post">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
                                    <?= form_error('nik') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nohp" placeholder="No Handphone" value="<?= set_value('nohp'); ?>">
                                    <?= form_error('nohp') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                    <?= form_error('password') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tulis Ulang Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="passconf" placeholder="Tulis ulang password" value="<?= set_value('passconf'); ?>">
                                    <?= form_error('passconf') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="role">
                                        <option value="">-Pilih-</option>
                                        <option value="Pengguna" <?= set_value('role') == 'Pengguna' ? "selected" : null; ?>>Pengguna</option>
                                        <option value="RT" <?= set_value('role') == 'RT' ? "selected" : null; ?>>RT</option>
                                        <option value="Kepala Desa" <?= set_value('role') == 'Kepala Desa' ? "selected" : null; ?>>Kepala Desa</option>
                                        <option value="Admin" <?= set_value('role') == 'Admin' ? "selected" : null; ?>>Admin</option>
                                    </select>
                                    <?= form_error('role') ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="pengguna" class="btn btn-success">Simpan</button>
                            <a href="<?= base_url('pengguna/show'); ?>" class="btn btn-secondary">Batal</a>
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