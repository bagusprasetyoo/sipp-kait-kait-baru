<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <?= $this->view('template/alert'); ?>
        <div class="row">
            <!-- Profile Image -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center"><?= $this->fungsi->user_login()->nama; ?></h3>
                        <p class="text-muted text-center"><?= $user['role']; ?></p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="dropdown-divider"></li>
                            <b>Bergabung Sejak</b>
                            <p class="float-right"><?= date('d-m-Y', strtotime($user['tanggal_daftar'])); ?></p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-outline">
                    <div class="card-body">
                        <?php echo form_open_multipart('pengaturan/edit_profile'); ?>
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="nama" placeholder="nama" value="<?= $this->fungsi->user_login()->nama; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIK</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= $this->input->post('nik') ?? $user['nik'] ?>" readonly>
                                    <?= form_error('nik') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $this->input->post('email') ?? $user['email'] ?>">
                                    <?= form_error('email') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No Handphone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nohp" placeholder="No Handphone" value="<?= $this->input->post('nohp') ?? $user['no_hp'] ?>">
                                    <?= form_error('nohp') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file" class="col-sm-3 col-form-label">Gambar Profil</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class=" custom-file-label" for="image">Ubah Gambar</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-floppy-disk"></i>
                                        Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <b><i class="fa-solid fa-lock"></i> Ganti Password</b>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="<?= base_url('pengaturan/change_password'); ?>" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="current_password">Password Sekarang</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Password Sekarang">
                                    <?= form_error('current_password') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="new_password">Password Baru</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Password Baru">
                                    <?= form_error('new_password') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="new_passconf">Password Sekarang</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="new_passconf" id="new_passconf" placeholder="Password Sekarang">
                                    <?= form_error('new_passconf') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-key"></i>
                                        Ganti Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

</section>

<!-- /.content -->