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
                    <form class="form-horizontal" action="<?= base_url('pengguna/add_peng') ?>" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= form_error('nik') ? 'is-invalid' : null ?>" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : null ?>" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= form_error('nohp') ? 'is-invalid' : null ?>" name="nohp" placeholder="No Handphone" value="<?= set_value('nohp'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : null ?>" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control <?= form_error('passconf') ? 'is-invalid' : null ?>" id="passconf" name="passconf" placeholder="Tulis ulang password" value="<?= set_value('passconf'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="role" id="role">
                                        <option>-Pilih-</option>
                                        <option>Pengguna</option>
                                        <option>RT</option>
                                        <option>Kepala Desa</option>
                                        <option>Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="pengu" class="btn btn-success">Submit</i></button>
                            <a href="<?= base_url('pengguna/tampil_peng'); ?>" class="btn btn-secondary">Cancel</i></a>
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