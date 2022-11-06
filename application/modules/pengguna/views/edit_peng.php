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
                    <form class="form-horizontal" action="" method="post">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="idpengguna" value="<?= $row->id_pengguna; ?>">
                                    <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= $this->input->post('nik') ?? $row->nik; ?>" readonly>
                                    <?= form_error('nik') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $this->input->post('email') ?? $row->email; ?>">
                                    <?= form_error('email') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nohp" placeholder="No Handphone" value="<?= $this->input->post('nohp') ?? $row->no_hp; ?>">
                                    <?= form_error('nohp') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="role">
                                        <?php $role = $this->input->post('role') ? $this->input->post('role') : $row->role; ?>
                                        <option value="Pengguna" <?= $role == 'Pengguna' ? "selected" : null; ?>>Pengguna</option>
                                        <option value="RT" <?= $role == 'RT' ? "selected" : null; ?>>RT</option>
                                        <option value="Kepala Desa" <?= $role == 'Kepala Desa' ? "selected" : null; ?>>Kepala Desa</option>
                                        <option value="Admin" <?= $role == 'Admin' ? "selected" : null; ?>>Admin</option>
                                    </select>
                                    <?= form_error('role') ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="pengguna" class="btn btn-success">Simpan Perubahan</i></button>
                            <a href="<?= base_url('pengguna/show'); ?>" class="btn btn-secondary">Batal</i></a>
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